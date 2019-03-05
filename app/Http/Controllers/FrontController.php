<?php

namespace App\Http\Controllers;

use App\Models\ActivityPage;
use App\Models\AnnouncePage;
use App\Models\Calendar;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function home()
    {
        $announces  = AnnouncePage::latest()->paginate(10);
        $activities = ActivityPage::latest()->paginate(10);
        
        return view('front-end.home', compact('announces', 'activities'));
    }
    
    public function course()
    {
        return view('front-end.course');
    }
    
    public function news()
    {
        $announces = AnnouncePage::latest()->paginate(20);
        
        return view('front-end.news', compact('announces'));
    }
    
    public function personnel()
    {
        $root  = User::where('root_status', 1)->first();
        $users = User::all();
        
        return view('front-end.personnel', compact('root', 'users'));
    }
    
    public function contact()
    {
        return view('front-end.contact');
    }
    
    public function calendar()
    {
        $calendars = Calendar::latest()->get();
        
        return view('front-end.calendar', compact('calendars'));
    }
    
    public function getCalendar($id)
    {
        $calendar = Calendar::find($id);
        
        return view('front-end.calendar-detail', compact('calendar'));
    }
}
