<?php

namespace App\Http\Controllers;

use App\Test1;
use App\Test2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Symfony\Component\DomCrawler\Crawler;

class Test2Controller extends Controller
{
    public function index()
    {
        return view('test.test2');
    }
}
