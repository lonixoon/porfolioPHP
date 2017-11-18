<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index()
    {
        $data['all_works'] = Work::all();
//        return dump($data);
        return view('user.work.work', $data);
    }

    public function indexAdmin()
    {
        return view('admin.work.work');
    }

    public function save(Request $request)
    {
        // делаем валидацию полей
        $this->validate($request, [
            'name' => 'required',
            'technology' => 'required',
            'photo' => 'required | image'
        ]);

        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction(function () use ($request) {
                // создаем новый отзыв
                $work = new Work();
                // берём поле file_name, очищаем от тегов
                $work->name = strip_tags($request->name);
                $work->technology = strip_tags($request->technology);
                // сохраняем в базу для создания id
                $work->save();
                // забераем файл
                $file = $request->file('photo');
                // создаём имя файла в соотвествии с id записи и оригинальным разширением
                $fileName = $work->id . '.' . $file->getClientOriginalExtension();
                // перемещаем фал в папку img на сервер
                $file->move('img/work', $fileName);
                // записываем путь до файла
                $work->photo = '/img/work/' . $fileName;
                // сохраняем в базу всю инфу
                $work->save();
            });
            // если что то пошло не так выводим ошибку
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}
