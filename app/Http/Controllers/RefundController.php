<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Booking;
use Str;
use Carbon\Carbon;

class RefundController extends Controller
{
    public function refunds(){
        $refunds = Refund::where('partner_id', Auth::user()->partner_id)->get();
        return view('refunds', compact('refunds'));
    }

    public function refundRequest(Request $request){
        $refunds = new Refund;
        $existing_data = Refund::all();
        $arr = [];
        foreach($existing_data as $ed){
            $arr = $ed;
            if($request->booking_id == $arr['booking_id'] ){
                return back();
            }
        }
        // dd($arr['booking_id']);
        $refunds->partner_id = Auth::user()->partner_id;
        if($request->hasFile('image')){
            $random = Str::random(28);
            $imgName = $random.'.'.$request->image->extension();
            $refunds->image = $request->image->storeAs('refunds', $imgName, 'public');
        }

        $refunds->booking_id = $request->booking_id;
        $refunds->reason = $request->reason;
        $refunds->cancel_status = 'Awaiting Confirmation';
        $refunds->refund_status = 'Awaiting Confirmation';
        $refunds->refund_date = Carbon::now();
        $refunds->refund_amount = 'Awaiting Confirmation';
        
        $refunds->save();
        return back();
    }
}
