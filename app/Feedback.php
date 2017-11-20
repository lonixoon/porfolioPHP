<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
    public function getFromDB()
    {
        // Выгружаем все, функцией фильруем и оставляем те у которых поле active == 1
        $activeFeedback = $this->all()->filter(function ($value, $key) {
            return $value['active'] == '1';
        });
        // Выбираем из активных, 2 последних
        $feedback = $activeFeedback->reverse()->take(3);

        return $feedback;
    }

    public function saveToDB($request)
    {
        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction(function () use ($request) {
                // берём поле input, очищаем от тегов и ...
                $this->user_name = strip_tags($request->user_name);
                $this->user_position = strip_tags($request->user_position);
                $this->user_email = strip_tags($request->user_email);
                $this->user_text = strip_tags($request->user_text);
                // .. сохраняем в базу
                $this->save();
            });
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}
