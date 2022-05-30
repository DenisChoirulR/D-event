<?php

namespace App\Http\Controllers\LandingPage;

use App\Event;
use App\Organization;
use App\EventCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeLandingController extends Controller
{
    public function index()
    {
    	$date = date('Y-m-d');
    	$event = Event::join('event_categories','events.category_id','=','event_categories.id')->join('organizations','organizations.id','=','events.organization_id')->select('*','events.id as event_id')->orderBy('events.id','desc')->where('start_date','>',$date)->where('status','approved')->get();
        return view('landing-page.homepage')->with('event',$event);
    }
}
