<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    public function index()
    {
        $data['last_skills'] = About::getLastSkills();
        return view('user.about.about', $data);
    }

    public function indexAdmin()
    {
        $data['last_skills'] = About::getLastSkills();
        return view('admin.about.about', $data);
    }

    public function indexAPI()
    {
        $data['last_skills'] = About::getLastSkills();
        return $data['last_skills'];
    }

    public function save(Request $request)
    {
        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction( function () use ($request) {
                // создаем новый отзыв
                $about = new About();
                // берём поле input, очищаем от тегов ...
                $about->html5 = strip_tags($request->html5);
                $about->css3 = strip_tags($request->css3);
                $about->js = strip_tags($request->js);
                $about->php = strip_tags($request->php);
                $about->mysql = strip_tags($request->mysql);
                $about->nodejs = strip_tags($request->nodejs);
                $about->mongodb = strip_tags($request->mongodb);
                $about->git = strip_tags($request->git);
                $about->gulp = strip_tags($request->gulp);
                $about->bower = strip_tags($request->bower);
                // ... сохраняем его в базу
                $about->save();
            });
//             перекидываем или выводим страницу блог
            return redirect()->action('AboutController@index');
//            $this->index();
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}
