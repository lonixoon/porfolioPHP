<?php

namespace App\Http\Controllers;

use App\Test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Symfony\Component\DomCrawler\Crawler;

class Test1Controller extends Controller
{
    // доступ к странице только после авторизации
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

//    public function index()
//    {
//        return view('test.test1');
//    }
//    public function index()
//    {
//        $ch = curl_init();
//// установка URL и других необходимых параметров
//        curl_setopt($ch, CURLOPT_URL, "https://www.gismeteo.ru/weather-novosibirsk-4690/");
//        curl_setopt($ch, CURLOPT_HEADER, 0);
////        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
//// загрузка страницы и выдача её браузеру
//        curl_exec($ch);
//// завершение сеанса и освобождение ресурсов
//        curl_close($ch);
//    }

    public function index()
    {

        // адрес сайта который парсим
        $link = 'http://ngs.ru/';
        $parse = new Test1();
        // передаём адрес сайта в медот и записываем ресультат в $data
        $data = $parse->getContent($link);
        // возвращаем шаблон дабвляем отправляем в него массив с данными
        return view('test.test1', $data);
    }
}
