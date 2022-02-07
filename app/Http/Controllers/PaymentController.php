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
        
        $payments = new Payment;
        $payments->user_id = Auth::user()->id;
        $payments->amount = substr($payment['amount'], 0, -2);
        if($success){
            $payments->status = 'success';
        }else{
            $payments->status = 'failed';
        }

        $transactions = new Transaction;
        $transactions->partner_id = Auth::user()->partner_id;
        $transactions->transaction_id = $input['razorpay_payment_id'];
        $transactions->mode = 'online';
        $transactions->amount = substr($payment['amount'], 0, -2);
        if($success){
            $transactions->status = 'success';
        }else{
            $transactions->status = 'failed';
        }
        $transactions->fd_id = $fd->fd_id;
        if($payments->save()){
            $transactions->payment_id = $payments->id;
            $transactions->save();
            return redirect()->route('transactions')->with('success', 'Your booking confirmed');
        }
    }
}
