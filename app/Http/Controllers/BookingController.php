<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::where('partner_id', Auth::user()->partner_id)->orderBy('id', 'desc')->get();
        return view('bookings', compact('bookings'));
    }

}
