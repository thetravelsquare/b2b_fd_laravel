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

        session()->put('passenger_name', $request->passenger_name);
        session()->put('pax', count($request->passenger_name));
        session()->put('passenger_dob', $request->passenger_dob);
        $age = [];
        
        foreach(session()->get('passenger_dob') as $dob){
            $dateOfBirth = $dob;
            $departure_date = $df->departure_date;
            $diff = date_diff(date_create($dateOfBirth), date_create($departure_date));
            array_push($age, $diff);
            session()->put('age', $age);
        }
        $child_count = 0;
        foreach(session()->get('age') as $age){
            if($age->format('%y') < 2){
                $child_count++;
            }
        }
        if($child_count > 0){
            $child_fare = $df->child_fare * $child_count;
        }else{
            $child_fare = 0;
        }
        $total = $df->adult_fare * (count($request->passenger_name) - $child_count) + $child_fare + $df->service_fee * count($request->passenger_name);
        $requests = $request->all();

        // dd(session()->get('passenger_dob')[0]);
        
        return view('confirm-booking', compact('df', 'total', 'requests'));
        // dd($request->all());
        // dd(count($request->passenger_name));
    }
}
