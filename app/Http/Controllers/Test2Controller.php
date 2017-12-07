<?php

namespace App\Http\Controllers;

use App\Test2;
use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function index()
    {
        return view('test.test2');
    }

    public function getFile(Request $rtf)
    {
        // получаем файл
        $file = $rtf->file('rtf');
        // создаём новую модель
        $test2 = new Test2();
        // Передаём файл -> получаем очищенный от всех тегов текст
        $text = $test2->rtf2text($file);
        // Передаём текст -> получаем очищенный массив
        $array = $test2->getArray($text);
        // Передаём очищенный массив -> получаем готовые данные
        $result['list'] = $test2->getData($array);
//        dump($result);

        return view('test.test2-2', $result);
    }
}


//        foreach ($result as $key => $value) {
//            echo '<p>';
//            echo '<div>' . $key . '</div>
//                  <div>sites:</div>';
//            foreach ($value as $key2 => $value2) {
//                echo '<span>' . $value2 . ', </span>';
//            }
//            echo '<div>------------------------------------------------------------</div>
//                  </p>';
//        }
// поиск по массиву с помощью регулярки
//        $arrSite = $filtered = array_filter($catalogOnly, function ($item) {
//            return preg_match('/T.*$/', $item);
//        });
