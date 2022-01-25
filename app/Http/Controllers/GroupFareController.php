<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupFare;
use Illuminate\Support\Facades\Auth;

class GroupFareController extends Controller
{
    public function index(){
        $group_fares = GroupFare::where('partner_id', Auth::user()->partner_id)->get();
        return view('group-fare', compact('group_fares'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'flight_type' => 'required',
            'departure' => 'required',
            'arrival' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'adults' => 'required',
        ]);
        try{
            $fare_request = new GroupFare;
            $fare_request->user_id = Auth::user()->id;
            $fare_request->gf_id = Auth::user()->id.'TTS'.rand(0000,9999);
            $fare_request->partner_id = Auth::user()->partner_id;
            $fare_request->flight_type = $request->flight_type;
            $fare_request->departure = $request->departure;
            $fare_request->arrival = $request->arrival;
            $fare_request->departure_date = $request->departure_date;
            $fare_request->arrival_date = $request->arrival_date;
            $fare_request->dep_time = $request->dep_time;
            $fare_request->arr_time = $request->arr_time;
            $fare_request->adults = $request->adults;
            $fare_request->child = $request->child;
            if($fare_request->save()){
                return back()->with('success', 'Your Request has Been Submitted');
            }
        }
        catch(Exception $e){
            return back()->with('success', 'Something Went Wrong');
        }
    }

    public function adminGroupFareRequest(){
        $group_fares = GroupFare::get();
        return view('admin.group-fare-requests', compact('group_fares'));
    }

    public function addGroupFareRequest(Request $request, $id){
        $group_fare = GroupFare::findOrFail($id);
        $group_fare->dep_time = $request->dep_time;
        $group_fare->arr_time = $request->arr_time;
        $group_fare->fare = $request->fare;
        if($group_fare->save()){
            return back()->with('success', 'Fare rate has been updated');
        }
    }
}
