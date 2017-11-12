<?php

namespace App\Http\Controllers;

use App\Test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class Test1Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // доступ к странице только после авторизации
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // вывод основного контента
    public function index()
    {
        // берём всё содиржимое модели
        $data['all_post'] = Test1::all();
//        dump($data['all_post']);
        // выводим шаблон и добавляем в переменную содержимое
        return view('test.test1', $data);
    }

    // вывод последнего отзыва
    public function last()
    {
        $data['last_post'] = Test1::getLastPost();
//        dump($data['last_post']);
        return view('test.test1.last', $data);
    }

    // форма создание отзыва
    public function create()
    {
        return view('test.test1.create');
    }

    // функция отправки отзыва
    public function send(Request $request)
    {
        // делаем валидацию полей file_name и file_img
        $this->validate($request, [
            'file_name' => 'required',
            'file_img' => 'required | image'
        ]);

        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction(function () use ($request) {
                // создаем новый отзыв
                $test1 = new Test1();
                // берём поле file_name, очищаем от тегов
                $test1->file_name = strip_tags($request->file_name);
                // сохраняем в базу для создания id
                $test1->save();
                // забераем файл
                $file = $request->file('file_img');
                // создаём имя файла в соотвествии с id записи и оригинальным рзширением
                $fileName = $test1->id . '.' . $file->getClientOriginalExtension();
                // перемещаем фал в папку img на сервер
                $file->move('img', $fileName);
                // записываем путь до файла
                $test1->file_img = '/img/' . $fileName;
                // сохраняем в базу всю инфу
                $test1->save();
            });
            // если что то пошло не так выводим ошибку
        } catch (Exception $exception) {
            dump($exception->getMessage());
        }
    }
}
