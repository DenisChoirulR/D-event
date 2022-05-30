<?php

namespace App\Http\Controllers;

use App\Event;
use App\Guest;
use App\Ticket;
use App\EventCategory;
use App\Booking;
use App\BookingDetail;
use App\Organization;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_guest = Guest::count();
        $total_organization = Organization::count();
        $total_event = Event::count();
        $approved_event = Event::where('status', 'approved')->count();
        $rejected_event = Event::where('status', 'rejected')->count();
        $total_ticket = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->where('status', 'accepted')->sum('qty');

        return view('admin.dashboard')
        ->with('total_guest', $total_guest)
        ->with('total_organization', $total_organization)
        ->with('total_event', $total_event)
        ->with('approved_event', $approved_event)
        ->with('rejected_event', $rejected_event)
        ->with('total_ticket', $total_ticket);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest()
    {
        $guest = Guest::join('users','users.id','=','guests.user_id')->select('*','guests.id as id')->get();
        foreach ($guest as $key => $g) {
            $guest[$key]['booking'] = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->where('guest_id',$g->id)->sum('qty');
        }
        return view('admin.guest')->with('guest',$guest);
    }

    public function guest_delete($id)
    {
        Guest::where('id',$id)->delete();
        return redirect('admin-guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function organization()
    {
        $organization = Organization::with('event')->join('users','users.id','=','organizations.user_id')->select('*','organizations.id as id')->get();
        return view('admin.organization')->with('organization',$organization);
    }

    public function organization_delete($id)
    {
        Organization::where('id',$id)->delete();
        return redirect('admin-organization');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event()
    {
        $event = Event::join('event_categories','event_categories.id','=','events.category_id')->select('*','events.id as id')->get();
        return view('admin.event')->with('event', $event);
    }

    public function event_delete($id)
    {
        Event::where('id',$id)->delete();
        return redirect('/admin-event');
    }

    public function event_approve($id)
    {
        Event::where('id',$id)->update([
            'status' => 'approved'
        ]);

        return back();
    }

    public function event_reject($id)
    {
        Event::where('id',$id)->update([
            'status' => 'rejected'
        ]);

        return back();
    }

    public function category()
    {
        $category = EventCategory::all();
        return view('admin.category')->with('category', $category);
    }

    public function category_create()
    {
        $category = EventCategory::all();
        return view('admin.category_create');
    }

    public function category_store(Request $request)
    {
        EventCategory::create([
            'category_name' => $request->category
        ]);
        return redirect('/admin-category');
    }

    public function category_delete($id)
    {
        EventCategory::where('id',$id)->delete();
        return redirect('/admin-category');
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
