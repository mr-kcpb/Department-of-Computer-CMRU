<?php

namespace App\Http\Controllers;

use App\Models\ActivityPage;
use App\Models\AnnouncePage;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    
    public function getAnnounce($id)
    {
        $announce = AnnouncePage::find($id);
        
        return view('front-end.announce-detail', compact('announce'));
    }
    
    public function getActivity($id)
    {
        $activity = ActivityPage::find($id);
        
        return view('front-end.activity-detail', compact('activity'));
    }
}
