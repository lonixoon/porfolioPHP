<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property string text
 */
class Blog extends Model
{
    public function getFromDB()
    {
        // Выгружаем все, функцией фильруем и оставляем те у которых поле active == 1
        $activeArticle = $this->all()->filter(function ($value, $key) {
            return $value['active'] == '1';
        });
        // Выбираем из активных, 10 последних
        $articles = $activeArticle->reverse()->take(10);

        return $articles;
    }

    public function saveToDB($request)
    {
        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction(function () use ($request) {
                // берём поле input, очищаем от тегов и ...
                $this->title = strip_tags($request->title);
                $this->text = strip_tags($request->text);
                // .. сохраняем в базу
                $this->save();
            });
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}
