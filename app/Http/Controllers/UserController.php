<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function profile(){
        $partner = Auth::user();
        return view('profile', compact('partner'));
    }

    public function updateProfile(Request $request){
        try{
            $partner = User::where('id', Auth::user()->id)->first();
            $partner->company_address = $request->company_address;
            $partner->ac_manager_name = $request->ac_manager_name;
            $partner->phone = $request->phone;
            // $partner->password = Hash::make($request->password);
            if($partner->save()){
                return back()->with('success', 'Profile Updated Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
