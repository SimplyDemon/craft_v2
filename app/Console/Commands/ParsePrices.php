<?php

namespace App\Console\Commands;

use App\Http\Controllers\PriceParserController;
use Illuminate\Console\Command;

class ParsePrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start parse from recent json file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        app(PriceParserController::class)->start();
    }
}
