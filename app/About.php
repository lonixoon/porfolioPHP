<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public static function getLastSkills()
    {
//        // выгружаем запись с id 1
//         return Test1::where('id', 1)->first();
        // выгружаем последнюю запись из базы
        return About::all()->last();
    }

    public function saveSkillDB()
    {

    }
}
