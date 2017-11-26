<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skill extends Model
{
    public function getLastSkills()
    {
//        // выгружаем запись с id 1
//         return Test1::where('id', 1)->first();
        // выгружаем последнюю запись из базы
        return Skill::all()->last();
    }

    public function saveToDB($request)
    {
        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction( function () use ($request) {
                // берём поле input, очищаем от тегов ...
                $this->html5 = strip_tags($request->html5);
                $this->css3 = strip_tags($request->css3);
                $this->js = strip_tags($request->js);
                $this->php = strip_tags($request->php);
                $this->mysql = strip_tags($request->mysql);
                $this->nodejs = strip_tags($request->nodejs);
                $this->mongodb = strip_tags($request->mongodb);
                $this->git = strip_tags($request->git);
                $this->gulp = strip_tags($request->gulp);
                $this->bower = strip_tags($request->bower);
                // ... сохраняем его в базу
                $this->save();
            });
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}
