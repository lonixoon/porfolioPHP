<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $work = new Work();
        $feedback = new Feedback();
        $data['all_works'] = $work->getFromDB();
        $data['all_feedback'] = $feedback->getFromDB();

        return view('user.work.work', $data);
    }

    public function indexAdmin()
    {
        return view('admin.work.work');
    }

    public function saveWork(Request $request)
    {
        // делаем валидацию полей
        $this->validate($request, [
            'name' => 'required',
            'technology' => 'required',
            'photo' => 'required | image'
        ]);

        $work = new Work();
        // вызываем метод и передаём в него запрос
        $work->saveToDB($request);
        // делаем редирект
        return redirect()->action('WorkController@index');
    }

    public function saveFeedback(Request $request)
    {
        // делаем валидацию полей
        $this->validate($request, [
            'user_name' => 'required',
//            'user_email' => 'email',
            'user_text' => 'required'
        ]);

        $feedback = new Feedback();
        // вызываем метод и передаём в него запрос
        $feedback->saveToDB($request);
        // делаем редирект
        return redirect()->action('WorkController@index');
    }
}
