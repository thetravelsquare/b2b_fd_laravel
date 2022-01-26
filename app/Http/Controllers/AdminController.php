<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\User;
use App\Models\Refund;
use App\Models\Transaction;
use App\Models\FixedDeparture;

class AdminController extends Controller
{
    public function dashboard(){
        if(Auth::user()->user_type == 'admin'){
            $users = User::where('user_type', 'partner')->get();
            return view('admin.index', compact('users'));
        }
        return view('dashboard');
    }

    public function index(){
        return view('auth.login');
    }

    public function admin(){
        return view('admin.index');
    }

    public function bookings(){
        return view('admin.add-bookings');
    }
    
    public function allBookings(){
        $bookings = Booking::orderBy('id', 'desc')->get();
        return view('admin.manage-bookings', compact('bookings'));
    }

    public function transactions(){
        return view('admin.add-transactions');
    }

    public function fixed_departure(){
        return view('admin.add-fixed-departure');
    }

       
    public function addBookings(Request $request){
        $validate = $request->validate([
            'partner_id' => 'required',
            'transaction_id' => 'required',
            'date' => 'required',
            'customer_name' => 'required',
            'pnr' => 'required',
            'departure' => 'required',
            'arrival' => 'required',
            'type' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'amount' => 'required',
            'voucher' => 'required',
            'payment_id' => 'required',
            'booking_id' => 'required',
            'fd_id' => 'required',
            'pax' => 'required',
        ]);
        $bookings = new Booking;
        $bookings->partner_id = $request->partner_id;
        $bookings->transaction_id = $request->transaction_id;
        $bookings->date = $request->date;
        $bookings->customer_name = $request->customer_name;
        $bookings->pnr = $request->pnr;
        $bookings->departure = $request->departure;
        $bookings->arrival = $request->arrival;
        $bookings->type = $request->type;
        $bookings->departure_date = $request->departure_date;
        $bookings->arrival_date = $request->arrival_date;
        $bookings->amount = $request->amount;
        $bookings->voucher = $request->voucher;
        $bookings->payment_id = $request->payment_id;
        $bookings->booking_id = $request->booking_id;
        $bookings->fd_id = $request->fd_id;
        $bookings->pax = $request->pax;
        // dd($bookings);
        if($bookings->save()){
            return redirect()->route('admin.manage_bookings');
        }
    }   

    public function addTransactions(Request $request){
        $validate = $request->validate([
            'partner_id' => 'required',
            'booking_id' => 'required',
            'payment_id' => 'required',
            'transaction_id' => 'required',
            'mode' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'invoice' => 'required',
            'fd_id' => 'required',
        ]);

        $transactions = new Transaction;
        $transactions->partner_id = $request->partner_id;
        $transactions->booking_id = $request->booking_id;
        $transactions->payment_id = $request->payment_id;
        $transactions->transaction_id = $request->transaction_id;
        $transactions->mode = $request->mode;
        $transactions->amount = $request->amount;
        $transactions->status = $request->status;
        $transactions->invoice = $request->invoice;
        $transactions->fd_id = $request->fd_id;
        if($transactions->save()){
            return redirect()->route('admin.manageTransactions');
        }
    }

    public function manageTransactions(){
        $transactions = Transaction::orderBy('id', 'desc')->get();
        return view('admin.manage-transactions', compact('transactions'));
    }
    
    public function manageFd(){
        $fds = FixedDeparture::orderBy('id', 'desc')->get();
        return view('admin.manage-fd', compact('fds'));
    }
    
    public function addFixedDeparture(Request $request){
        $validate = $request->validate([
            'airline' => 'required',
            'flight_no' => 'required',
            'departure_from' => 'required',
            'arrival_to' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'journey_type' => 'required',
            'flight_type' => 'required',
            'baggage_policy' => 'required',
            'fd_id' => 'required',
            'sector' => 'required',
            'international_or_domestic' => 'required',
            'adult_fare' => 'required',
            'service_fee' => 'required',
            'fare_type' => 'required',
            'rescheduling_fee' => 'required',
            'cancellation_fee' => 'required',
        ]);

        $fd = new FixedDeparture;
        $fd->airline = $request->airline;
        $fd->flight_no = $request->flight_no;
        $fd->departure_from = $request->departure_from;
        $fd->arrival_to = $request->arrival_to;
        $fd->departure_time = $request->departure_time;
        $fd->arrival_time = $request->arrival_time;
        $fd->departure_date = $request->departure_date;
        $fd->arrival_date = $request->arrival_date;
        $fd->journey_type = $request->journey_type;
        $fd->flight_type = $request->flight_type;
        $fd->baggage_policy = $request->baggage_policy;
        $fd->fd_id = $request->fd_id;
        $fd->sector = $request->sector;
        $fd->international_or_domestic = $request->international_or_domestic;
        $fd->adult_fare = $request->adult_fare;
        $fd->child_fare = $request->child_fare;
        $fd->service_fee = $request->service_fee;
        $fd->fare_type = $request->fare_type;
        $fd->rescheduling_fee = $request->rescheduling_fee;
        $fd->cancellation_fee = $request->cancellation_fee;
        if($fd->save()){
            return back()->with('success', 'Fixed Departure Added');
        }
    }
    
    public function editFixedDeparture(Request $request, $id){
        $validate = $request->validate([
            'airline' => 'required',
            'flight_no' => 'required',
            'departure_from' => 'required',
            'arrival_to' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'journey_type' => 'required',
            'flight_type' => 'required',
            'baggage_policy' => 'required',
            'fd_id' => 'required',
            'sector' => 'required',
            'international_or_domestic' => 'required',
            'adult_fare' => 'required',
            'service_fee' => 'required',
            'fare_type' => 'required',
            'rescheduling_fee' => 'required',
            'cancellation_fee' => 'required',
        ]);

        $fd = FixedDeparture::findOrFail($id);
        $fd->airline = $request->airline;
        $fd->flight_no = $request->flight_no;
        $fd->departure_from = $request->departure_from;
        $fd->arrival_to = $request->arrival_to;
        $fd->departure_time = $request->departure_time;
        $fd->arrival_time = $request->arrival_time;
        $fd->departure_date = $request->departure_date;
        $fd->arrival_date = $request->arrival_date;
        $fd->journey_type = $request->journey_type;
        $fd->flight_type = $request->flight_type;
        $fd->baggage_policy = $request->baggage_policy;
        $fd->fd_id = $request->fd_id;
        $fd->sector = $request->sector;
        $fd->international_or_domestic = $request->international_or_domestic;
        $fd->adult_fare = $request->adult_fare;
        $fd->child_fare = $request->child_fare;
        $fd->service_fee = $request->service_fee;
        $fd->fare_type = $request->fare_type;
        $fd->rescheduling_fee = $request->rescheduling_fee;
        $fd->cancellation_fee = $request->cancellation_fee;
        if($fd->save()){
            return back()->with('success', 'Fixed Departure Updated');
        }
    }

    public function refundRequest(){
        $requests = Refund::orderBy('id', 'desc')->get();
        return view('admin.refund-requests', compact('requests'));
    }
}
