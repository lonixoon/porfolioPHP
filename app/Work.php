<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Work extends Model
{
    public function getFromDB()
    {
        // Выгружаем все, функцией фильруем и оставляем те у которых поле active == 1
        $activeWork = $this->all()->reverse()->filter(function ($value, $key) {
            return $value['active'] == '1';
        });

        return $activeWork;
    }

    public function saveToDB($request)
    {
        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction(function () use ($request) {
                // берём поле file_name, очищаем от тегов
                $this->work_name = strip_tags($request->work_name);
                $this->work_technology = strip_tags($request->work_technology);
                $this->work_url = strip_tags($request->work_url);
                // сохраняем в базу для создания id
                $this->save();
                // забераем файл
                $file = $request->file('work_photo');
                // создаём имя файла в соотвествии с id записи и оригинальным разширением
                $fileName = $this->id . '.' . $file->getClientOriginalExtension();
                // перемещаем фал в папку img на сервер
                $file->move('img/work', $fileName);
                // записываем путь до файла
                $this->work_photo = '/img/work/' . $fileName;
                // сохраняем в базу всю инфу
                $this->save();
            });
            // если что то пошло не так выводим ошибку
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}