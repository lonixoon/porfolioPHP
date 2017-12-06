<?php

namespace App\Http\Controllers;

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

    public function getFile(Request $rtf)
    {
        // получаем файл
        $file = $rtf->file('rtf');
        // создаём новую модель
        $test2 = new Test2();
        // получаем чистый массив
        $arr = $test2->getArray($file);
        $catalog = array_search('----------------------------------------- Intagrate catalog to stores ---------------------------------------', $arr);
        $catalogOnly = array_slice($arr, $catalog + 1);

        $site = '';
        $arrayResult = [];
        $arrayUNIC = [];
        $result = [];
        foreach ($catalogOnly as $key => $value) {
            if (explode(' ', $value)[0] == 'Site') {
                $site = $value;
            } else {
                $arrayUNIC[] = str_replace('- 0', '', $catalogOnly[$key]);
                $arrayResult[] = str_replace('- 0', '', $catalogOnly[$key]) . '|' . explode(' -', $site)[0];
            }
        }
        foreach (array_unique($arrayUNIC) as $key => $value) {
            foreach ($arrayResult as $key2 => $value2) {
                if ($value == explode('|', $value2)[0]) {
                    $result[$value][] = explode('  ', explode('|', $value2)[1])[1];
                }
            }
        }

        foreach ($result as $key => $value) {
            echo '<p>';
            echo '<div>' . $key . '</div>
                  <div>sites:</div>';
            foreach ($value as $key2 => $value2) {
                echo '<span>' . $value2 . ', </span>';
            }
            echo '</p>';
        }


//        dump($arrayResult);

//        $filtered = array_filter($catalogOnly, function ($item) {
//            return preg_match('/T.*$/', $item);
//        });
    }
}
