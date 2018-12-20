<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function main()
    {
        return view('back-end.main');
    }
}
