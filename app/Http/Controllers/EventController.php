<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;
use App\Booking;
use App\BookingDetail;
use App\Organization;
use App\EventCategory;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();
        $event = Event::join('event_categories','event_categories.id','=','events.category_id')->where('organization_id', $organization->id)->select('*','events.id as id','events.created_at as created_at')->orderBy('events.id','desc')->get();
        return view('event.index')->with('event', $event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = EventCategory::all();
        return view('event.create')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        //image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = preg_replace( '/[^a-z0-9]+/', '_', strtolower( $request['event_name'] ) ). '_' . time() . '.' . request()->image->getClientOriginalExtension();

        $request->image->storeAs('public/event',$image);

        $event = Event::create([
            'organization_id' => $organization->id,
            'event_name' => $request['event_name'],
            'category_id' => $request['category_id'],
            'image' => $image,
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time'],
            'place' => $request['place'],
            'address' => $request['address'],
            'event_description' => $request['event_description'],
            'account_number' => $request['account_number'],
            'contact_person' => $request['contact_person']
        ]);

        foreach ($request->category as $key => $value) {
            Ticket::create([
                'event_id' => $event->id,
                'category' => $value,
                'capacity' => $request->capacity[$key],
                'price' => $request->price[$key]
            ]);
        }

        return redirect('/event-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();
        $event = Event::join('event_categories','event_categories.id','=','events.category_id')->where('organization_id', $organization->id)->where('events.id',$id)->select('*','events.id as id')->first();

        $booking = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->join('tickets','tickets.id','=','booking_details.ticket_id')->join('guests','guests.id','=','bookings.guest_id')->join('users','users.id','=','guests.user_id')->where('tickets.event_id',$id)->groupBy('bookings.id')->orderBy('bookings.id','desc')->select('*','bookings.id as id','bookings.created_at as created_at')->get();

        foreach ($booking as $key => $value) {
            $booking[$key]['detail'] = BookingDetail::join('tickets','tickets.id','=','booking_details.ticket_id')->where('booking_id',$value->id)->get();
        }

        return view('event.show')
        ->with('event',$event)
        ->with('booking',$booking);
    }

    /**
     * Display the specified booking resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function booking_detail($id)
    {
        $booking = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->join('tickets','tickets.id','=','booking_details.ticket_id')->join('guests','guests.id','=','bookings.guest_id')->join('users','users.id','=','guests.user_id')->where('bookings.id',$id)->select('*','bookings.id as id')->get();

        return view('event.detail_booking')
        ->with('booking',$booking);
    }

    public function booking_accept($id)
    {
        Booking::where('id',$id)->update([
            'status' => 'accepted']);

        return back();
    }

    public function booking_reject($id)
    {
        Booking::where('id',$id)->update([
            'status' => 'rejected']);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
