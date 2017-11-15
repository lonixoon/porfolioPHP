<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        // берём всё содиржимое модели
        $data['all_post'] = Blog::all();
        return view('user.blog.blog', $data);
    }

    public function indexAdmin()
    {
        return view('admin.blog.blog');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required'
        ]);

        try {
            // транзакция для сохранения целосности информации, если ошибка данные в базе не запишутся
            DB::transaction( function () use ($request) {
                // создаем новый отзыв
                $blog = new Blog();
                // берём поле input, очищаем от тегов
                $blog->title = strip_tags($request->title);
                $blog->text = strip_tags($request->text);
                // сохраняем в базу для создания id
                $blog->save();
            });
        } catch (Exception $exception) {
            dump($exception->getMessage());
        }
    }
}
