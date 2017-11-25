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
        return view('user.about.about');
    }


    public function indexAdmin()
    {
        $data['last_skills'] = About::getLastSkills();
        return view('admin.about.about', $data);
    }


    // выводим данные для JS
    public function indexAPI()
    {
        $data['last_skills'] = About::getLastSkills();
        return $data['last_skills'];
    }


    public function save(Request $request)
    {
        // делаем валидацию полей
        $this->validate($request, [
//            'user_name' => 'required',
//            'user_email' => 'email',
//            'user_text' => 'required'
        ]);

        $about = new About();
        // вызываем метод и передаём в него запрос
        $about->saveToDB($request);
        // делаем редирект
        return redirect()->action('AboutController@index');
    }
}
