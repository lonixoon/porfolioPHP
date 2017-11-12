<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test1 extends Model
{
    public static function getLastPost()
    {
//        // выгружаем запись с id 1
//         return Test1::where('id', 1)->first();
        // выгружаем последнюю запись из базы
        return Test1::all()->last();
    }
}
