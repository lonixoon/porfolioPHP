<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index()
    {
        $skill = new Skill();
        $data['last_skills'] = $skill->getLastSkills();
        return view('user.about.about',  $data);
    }


    public function indexAdmin()
    {
        $skill = new Skill();
        $data['last_skills'] = $skill->getLastSkills();
        return view('admin.about.about', $data);
    }


    // выводим данные для JS
    public function indexAPI()
    {
        $skill = new Skill();
        $data['last_skills'] = $skill->getLastSkills();
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
        $about = new Skill();
        // вызываем метод и передаём в него запрос
        $about->saveToDB($request);
        // делаем редирект
        return redirect()->action('AboutController@index');
    }
}
