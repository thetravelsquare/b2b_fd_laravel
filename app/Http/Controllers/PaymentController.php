<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use App\Models\FixedDeparture;
use App\Models\Transaction;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{  public function payment(Request $request, $ifd)
    {
        $fd = FixedDeparture::where('id', $ifd)->first();
        $input = $request->all();
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
        
        // $transactions = new Transaction;
        // $transactions->user_id = Auth::user()->id;
        // $transactions->partner_id = Auth::user()->partner_id;
        // $transactions->amount = substr($payment['amount'], 0, -2);
        // if($success){
        //     $transactions->status = 'success';
        // }else{
        //     $transactions->status = 'failed';
        // }
        
        $payments = new Payment;
        $payments->partner_id = Auth::user()->partner_id;
        $payments->user_id = Auth::user()->id;
        $payments->airline = $fd->airline;
        $payments->flight_no = $fd->flight_no;
        $payments->departure_from = $fd->flight_no;
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
        $payments->status = $fd->status;
        $payments->transaction_id = $fd->transaction_id;
        $payments->mode = $fd->mode;
        $payments->transaction_id = $input['razorpay_payment_id'];
        $payments->mode = 'online';
        $payments->amount = substr($payment['amount'], 0, -2);
        \Log::info($payments);
        if($success){
            $payments->status = 'success';
        }else{
            $payments->status = 'failed';
        }
        $payments->fd_id = $fd->fd_id;
        if($payments->save()){
            $payments->payment_id = $payments->id;
            $payments->save();
            return redirect()->route('transactions')->with('success', 'Your booking confirmed');
        }
    }
}
