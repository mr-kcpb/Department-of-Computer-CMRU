<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function home()
    {
        return view('front-end.home');
    }
    
    public function course()
    {
        return view('front-end.course');
    }
    
    public function news()
    {
        return view('front-end.news');
    }
    
    public function personnel()
    {
        $root  = Users::where('root_status', 1)->first();
        $users = Users::all();
        
        return view('front-end.personnel', compact('root', 'users'));
    }
    
    public function contact()
    {
        return view('front-end.contact');
    }
}
