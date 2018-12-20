<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front-end.index');
    }

    public function course()
    {
        return view('front-end.course');
    }

    public function news()
    {
        return view('front-end.news');
    }

    public function personal()
    {
        return view('front-end.personal');
    }

    public function contact()
    {
        return view('front-end.contact');
    }
}
