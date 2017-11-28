<?php

namespace App\Http\Controllers;

use App\Test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class Test1Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // доступ к странице только после авторизации
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

//    public function index()
//    {
//        return view('test.test1');
//    }
    public function index()
    {
        $ch = curl_init();

// установка URL и других необходимых параметров
        curl_setopt($ch, CURLOPT_URL, "https://www.gismeteo.ru/weather-novosibirsk-4690/");
        curl_setopt($ch, CURLOPT_HEADER, 0);

// загрузка страницы и выдача её браузеру
        curl_exec($ch);

// завершение сеанса и освобождение ресурсов
        curl_close($ch);
    }
}
