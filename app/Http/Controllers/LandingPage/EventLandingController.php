<?php

namespace App\Http\Controllers\LandingPage;
use App\Event;
use App\Organization;
use App\Guest;
use App\EventCategory;
use App\Ticket;
use App\Booking;
use App\BookingDetail;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventLandingController extends Controller
{
    public function index()
    {
        $date = date('Y-m-d');
        //dd($date);
        $event = Event::join('event_categories','events.category_id','=','event_categories.id')->join('organizations','organizations.id','=','events.organization_id')->where('start_date','>',$date)->where('status','approved')->select('*','events.id as event_id')->orderBy('events.id','desc')->get();
        return view('landing-page.event')->with('event',$event);
    }

    public function detail_event($id)
    {
        $guest = Guest::where('user_id', Auth::user()->id)->first();
        $event = Event::with('ticket')->join('event_categories','events.category_id','=','event_categories.id')->join('organizations','organizations.id','=','events.organization_id')->where('events.id',$id)->select('*','events.id as id')->first();

        foreach ($event['ticket'] as $key => $t) {
            $event['ticket'][$key]['ordered'] = BookingDetail::join('bookings','bookings.id','=','booking_details.booking_id')->where('ticket_id', $t->id)->where(function ($query) {$query->where('status','accepted')->orWhere('status','ordered');})->sum('qty');
        }

        $booking = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->join('tickets','tickets.id','=','booking_details.ticket_id')->join('guests','guests.id','=','bookings.guest_id')->join('users','users.id','=','guests.user_id')->where('tickets.event_id',$id)->where('guest_id',$guest->id)->groupBy('bookings.id')->select('*','bookings.id as id','bookings.created_at as created_at')->first();

        return view('landing-page.event-detail')->with('event',$event)->with('booking',$booking);
    }    

    public function booking_store(Request $request)
    {
        //code generate
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 8; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $guest = Guest::where('user_id', Auth::user()->id)->first();
        $event_id = $request->event_id;
        $ticket = Ticket::where('event_id', $event_id)->get();

        $booking = Booking::create([
            'guest_id' => $guest->id,
            'status' => 'ordered',
            'code' => $randomString
        ]);

        foreach ($ticket as $key => $value) {
            $request_name = 'qty'.$value->id;
            $qty = $request->$request_name;

            $ordered = BookingDetail::join('bookings','bookings.id','=','booking_details.booking_id')->where('ticket_id', $value->id)->where(function ($query) {$query->where('status','accepted')->orWhere('status','ordered');})->sum('qty');

            if ($qty > 5) {
                Booking::where('id',$booking->id)->delete();
                return back()->with(['error' => 'Pemesanan melebihi batas maksimal']);
            }

            if ($value->capacity < $ordered + $qty) {
                Booking::where('id',$booking->id)->delete();
                return back()->with(['error' => 'Pemesanan melebihi batas quota']);
            }
            
            if ($qty > 0) {
                BookingDetail::create([
                    'booking_id' => $booking->id,
                    'ticket_id' => $value->id,
                    'qty' => $qty
                ]);     
            }
        }

        return redirect('/booking/'.$event_id);
    } 

    public function booking($id)
    {
        $guest = Guest::where('user_id', Auth::user()->id)->first();
        $event = Event::with('ticket')->join('event_categories','events.category_id','=','event_categories.id')->join('organizations','organizations.id','=','events.organization_id')->where('events.id',$id)->select('*','events.id as id')->first();

        $booking = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->join('tickets','tickets.id','=','booking_details.ticket_id')->join('guests','guests.id','=','bookings.guest_id')->join('users','users.id','=','guests.user_id')->where('tickets.event_id',$id)->where('guest_id',$guest->id)->groupBy('bookings.id')->select('*','bookings.id as id','bookings.created_at as created_at')->first();

        $booking_detail = BookingDetail::join('tickets','tickets.id','=','booking_details.ticket_id')->where('booking_id',$booking->id)->get();

        return view('landing-page.booking')
        ->with('booking',$booking)
        ->with('booking_detail',$booking_detail)
        ->with('event', $event);
    } 

    public function upload(Request $request)
    {
        $request->validate([
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = time() . '.' . request()->proof_of_payment->getClientOriginalExtension();

        $request->proof_of_payment->storeAs('public/payment',$image);

        Booking::find($request->booking_id)-> update ([
            'status' => 'uploaded',
            'proof_of_payment' => $image,
            'uploaded_at' => date("Y-m-d H:i:s")
        ]);
        return back();
    }

    public function ticket_print($id)
    {
        $guest = Guest::join('users','users.id','=','guests.user_id')->where('user_id', Auth::user()->id)->select('*','guests.id as id')->first();
        $event = Event::with('ticket')->join('event_categories','events.category_id','=','event_categories.id')->join('organizations','organizations.id','=','events.organization_id')->where('events.id',$id)->select('*','events.id as id')->first();

        $booking = Booking::join('booking_details','booking_details.booking_id','=','bookings.id')->join('tickets','tickets.id','=','booking_details.ticket_id')->join('guests','guests.id','=','bookings.guest_id')->join('users','users.id','=','guests.user_id')->where('tickets.event_id',$id)->where('guest_id',$guest->id)->groupBy('bookings.id')->select('*','bookings.id as id','bookings.created_at as created_at')->first();

        $booking_detail = BookingDetail::join('tickets','tickets.id','=','booking_details.ticket_id')->where('booking_id',$booking->id)->get();

        return view('landing-page.ticket')
        ->with('guest',$guest)
        ->with('booking',$booking)
        ->with('booking_detail',$booking_detail)
        ->with('event', $event);
    } 

    public function teams()
    {
        $team = Organization::all();
        return view('landing-page.teams')->with('team',$team);
    }

    public function speaker()
    {
        return view('landing-page.speaker');
    }

    public function contact()
    {
        return view('landing-page.contact');
    }
}
