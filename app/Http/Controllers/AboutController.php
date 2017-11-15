<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('user.about.about');
    }

    public function indexAdmin()
    {
        return view('admin.about.about');
    }
}
