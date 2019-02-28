<?php

namespace App\Http\Controllers;

use App\Models\Users;
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
        $root  = Users::where('root_status', 1)->first();
        $users = Users::all();
        
        return view('front-end.personal', compact('root', 'users'));
    }
    
    public function contact()
    {
        return view('front-end.contact');
    }
}
