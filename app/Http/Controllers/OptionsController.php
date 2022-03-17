<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OptionsController extends Controller
{
    /**
     * Get lastResourcesPricesUpdateTime option
     * Return option or null
     */
    static public function getLastResourcesPricesUpdateTime()
    {
        try {
            $time = Options::where('name', 'lastResourcesPricesUpdateTime')->firstOrFail();
            $time = date('d.m.Y H:i', strtotime($time->value));

            return $time;
        } catch (\Exception $e) {
            return null;
        }

    }


    /**
     *  Update option or create new if not exists
     */
    static public function updateLastResourcesPricesUpdateTime()
    {

        Options::firstOrCreate([
            'name' => 'lastResourcesPricesUpdateTime',
        ], [
            'name'  => 'lastResourcesPricesUpdateTime',
            'value' => Carbon::now()->toDateTimeString(),
        ])->update([
            'value' => Carbon::now()->toDateTimeString(),
        ]);


    }

}
