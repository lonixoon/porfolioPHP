<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index()
    {
        $blog = new Blog();
        $data['all_article'] = $blog->getFromDB();

        return view('user.blog.blog', $data);
    }

    public function indexAdmin()
    {
        return view('admin.blog.blog');
    }

    public function save(Request $request)
    {
        // валидация полученных данных
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required'
        ]);

        $blog = new Blog();
        // вызываем метод и передаём в него запрос
        $blog->saveToDB($request);
        // делаем редирект
        return redirect()->action('BlogController@index');
    }
}
