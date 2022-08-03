<?php

namespace App\Handlers;

use Exception;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;

class TelegramHandler extends AbstractProcessingHandler
{
    /**
     * Sends logs to chats through Telegram bot
     *
     * $logger = new Logger('telegram-logger');
     * $handler = new TelegramHandler('123456789:teMbvbETojnSG93jDhnynvH8pT28H9TIB1h', 1234567);
     * $handler->setFormatter(new TelegramFormatter());
     * $logger->pushHandler($handler);
     */

    const BASE_URI = 'https://api.telegram.org';


    /**
     * Use cURL extension?
     *
     * @var bool
     */
    private $useCurl;

    /**
     * Timeout for requests
     *
     * @var int
     */
    private $timeout;

    /**
     * Verify SSL certificate?
     *
     * @var bool
     */
    private $verifyPeer;

    /**
     * @param  int  $level  The minimum logging level at which this handler will be triggered
     * @param  bool  $bubble  Whether the messages that are handled can bubble up the stack or not
     * @param  bool  $useCurl  Whether to use cURL extension when available or not
     * @param  int  $timeout  Maximum time to wait for requests to finish
     * @param  bool  $verifyPeer  Whether to use SSL certificate verification or not
     */
    public function __construct(
        $level = Logger::DEBUG,
        $bubble = true,
        $useCurl = true,
        $timeout = 10,
        $verifyPeer = true
    ) {
        $this->useCurl    = $useCurl;
        $this->timeout    = $timeout;
        $this->verifyPeer = $verifyPeer;

        parent::__construct($level, $bubble);
    }

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    protected function write(array $record): void
    {
        $env     = env('APP_ENV');
        $message = "Env: $env{$env} {$record['message']}";
        $this->send($message);
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array $records): void
    {
        $messages = [];
        foreach ($records as $record) {
            if ($record['level'] < $this->level) {
                continue;
            }

            $messages[] = $this->processRecord($record);
        }

        if ( ! empty($messages)) {
            $this->write(['formatted' => $this->getFormatter()->formatBatch($messages)]);
        }
    }

    protected function execCurlRequest($handle)
    {
        $response = curl_exec($handle);

        if ($response === false) {
            $errno = curl_errno($handle);
            $error = curl_error($handle);
            error_log("Curl returned error $errno: $error\n");
            curl_close($handle);

            return false;
        }

        $httpCode = intval(curl_getinfo($handle, CURLINFO_HTTP_CODE));
        curl_close($handle);

        if ($httpCode >= 500) {
            // do not wat to DDOS server if something goes wrong
            sleep(10);

            return false;
        } elseif ($httpCode != 200) {
            $response = json_decode($response, true);
            error_log("Request has failed with error {$response['error_code']}: {$response['description']}\n");
            if ($httpCode == 401) {
                throw new Exception('Invalid access token provided');
            }

            return false;
        } else {
            $response = json_decode($response, true);
            if (isset($response['description'])) {
                error_log("Request was successful: {$response['description']}\n");
            }
            $response = $response['result'];
        }

        return $response;
    }

    /**
     * @throws Exception
     */
    protected function apiRequest(string $method, array $parameters)
    {
        foreach ($parameters as $key => &$val) {
            // encoding to JSON array parameters, for example reply_markup
            if ( ! is_numeric($val) && ! is_string($val)) {
                $val = json_encode($val);
            }
        }
        $botToken = env('TELEGRAM_NOTIFY_BOT_TOKEN');
        $apiUrl   = "https://api.telegram.org/bot{$botToken}/";
        $url      = $apiUrl.$method.'?'.http_build_query($parameters);

        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($handle, CURLOPT_TIMEOUT, 60);

        return $this->execCurlRequest($handle);
    }

    /**
     * @throws Exception
     */
    public function send(string $text): bool
    {
        $chatId = env('TELEGRAM_NOTIFY_BOT_CHAT_ID');
        $this->apiRequest('sendMessage', [
            'chat_id'                  => $chatId,
            'text'                     => $text,
            'disable_web_page_preview' => true,
        ]);

        return true;
    }
}
