<?php

namespace App\Logging;

use App\Handlers\TelegramHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class TelegramLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     *
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        $telegramHandler = new TelegramHandler();

        return new Logger('telegramLogger', [$telegramHandler]);
    }
}
