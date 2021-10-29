<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function transactions(){
        $transactions = Transaction::where('partner_id', Auth::user()->partner_id )->get();
        // return $transactions;
        return view('transactions', compact('transactions'));
    }
}
