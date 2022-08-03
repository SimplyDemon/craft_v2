<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    function index()
    {
        session_start();
        session_start();
        session_start();
        Log::channel('bossesParserWithTelegram')->error('Feed Url: Hello, dear');
    }
}
