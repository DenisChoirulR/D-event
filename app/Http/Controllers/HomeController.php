<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Organization;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();
        $total_event = Event::where('organization_id', $organization->id)->count();
        $total_ticket = Event::join('tickets','tickets.event_id','=','events.id')->join('booking_details','booking_details.ticket_id','=','tickets.id')->join('bookings','bookings.id','=','booking_details.booking_id')->where('bookings.status','accepted')->where('organization_id', $organization->id)->sum('qty');
        return view('dashboard')
        ->with('total_ticket',$total_ticket)
        ->with('total_event',$total_event);
    }
}
