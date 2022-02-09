<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\FixedDeparture;
use Illuminate\Support\Facades\Auth;
use Session;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::where('partner_id', Auth::user()->partner_id)->orderBy('id', 'desc')->get();
        return view('bookings', compact('bookings'));
    }

    public function bookingReview($id, $airline, $flight_no){
        $df = FixedDeparture::where('id', $id)->first();
        return view('booking-review', compact('df'));
    }

    public function confirmBooking(Request $request, $id){
        $df = FixedDeparture::where('id', $id)->first();
        $total = $df->adult_fare * count($request->passenger_name) + $df->service_fee;
        $requests = $request->all();
        session()->put('passenger_name', $request->passenger_name);
        session()->put('pax', count($request->passenger_name));
        session()->put('passenger_dob', count($request->passenger_dob));
        return view('confirm-booking', compact('df', 'total', 'requests'));
        // dd($request->all());
        // dd(count($request->passenger_name));
    }
}
