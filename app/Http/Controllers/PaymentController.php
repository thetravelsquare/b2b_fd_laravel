<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\FixedDeparture;
use App\Models\Transaction;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{  
    public function payment(Request $request, $ifd, $total){
        $fd = FixedDeparture::where('id', $ifd)->first();
        $input = $request->all();
        \Log::info($input);
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        Session::put('success', 'Payment successful');
        $success = $request->session()->get('success');
        
        $payments = new Payment;
        $payments->partner_id = Auth::user()->partner_id;
        $payments->user_id = Auth::user()->id;
        $payments->airline = $fd->airline;
        $payments->flight_no = $fd->flight_no;
        $payments->departure_from = $fd->departure_from;
        $payments->arrival_to = $fd->arrival_to;
        $payments->departure_time = $fd->departure_time;
        $payments->arrival_time = $fd->arrival_time;
        $payments->departure_date = $fd->departure_date;
        $payments->arrival_date = $fd->arrival_date;
        $payments->journey_type = $fd->journey_type;
        $payments->flight_type = $fd->flight_type;
        $payments->baggage_policy = $fd->baggage_policy;
        $payments->fd_id = $fd->fd_id;
        $payments->sector = $fd->sector;
        $payments->international_or_domestic = $fd->international_or_domestic;
        $payments->adult_fare = $fd->adult_fare;
        $payments->child_fare = $fd->child_fare;
        $payments->service_fee = $fd->service_fee;
        $payments->fare_type = $fd->fare_type;
        $payments->rescheduling_fee = $fd->rescheduling_fee;
        $payments->cancellation_fee = $fd->cancellation_fee;
        $payments->price = $fd->adult_fare;
        $payments->amount = $total;
        $payments->customer_name = json_encode(session()->get('passenger_name'));
        $payments->customer_dob = json_encode(session()->get('passenger_dob'));
        $payments->pax = session()->get('pax');
        $payments->transaction_id = $input['razorpay_payment_id'];
        $payments->mode = 'online';

        $booking = new Booking;
        $booking->partner_id = Auth::user()->partner_id;
        $booking->transaction_id = $input['razorpay_payment_id'];
        $booking->date = date("Y/m/d");
        $booking->customer_name = json_encode(session()->get('passenger_name'));
        $booking->customer_dob = json_encode(session()->get('passenger_dob'));
        $booking->departure = $fd->departure_from;
        $booking->arrival = $fd->arrival_to;
        $booking->type = $fd->flight_type;
        $booking->departure_date = $fd->departure_date;
        $booking->arrival_date = $fd->arrival_date;
        $booking->amount = $total;
        $booking->fd_id = $fd->fd_id;
        $booking->pax = session()->get('pax');
        $booking->mode = 'online';

        $payments->amount = substr($payment['amount'], 0, -2);
        if($success){
            $payments->status = 'success';
            $booking->status = 'success';
            $booking->payment_id = $payment->id;
            if($fd->international_or_domestic == 'international'){
                $booking->booking_id = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFIFD';
                $booking->pnr = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFIFD';
            }else{
                $booking->booking_id = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFDFD';
                $booking->pnr = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFDFD';
            }
            $booking->save();
            $payments->save();
        }else{
            $payments->status = 'failed';
            $booking->status = 'failed';
            $booking->payment_id = $payment->id;
            if($fd->international_or_domestic == 'international'){
                $booking->booking_id = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFIFD';
                $booking->pnr = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFIFD';
            }else{
                $booking->booking_id = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFDFD';
                $booking->pnr = 'TSB'.str_pad($payments->id, 5, '0', STR_PAD_LEFT).'BFDFD';
            }
            $booking->save();
            $payments->save();
        }
        $payments->fd_id = $fd->fd_id;
        if($payments->save()){
            return redirect()->route('bookings')->with('success', 'Your booking confirmed');
        }else{
            return redirect()->route('bookings')->with('error', 'Something Went Wrong');
        }
    }
}
