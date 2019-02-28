<?php

namespace App\Http\Controllers;

use App\Models\AnnouncePage;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    
    public function getAnnounce($id)
    {
        $announce = AnnouncePage::find($id);
        
        return view('front-end.announce-detail', compact('announce'));
    }
}
