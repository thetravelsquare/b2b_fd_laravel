<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FixedDeparture;
use Illuminate\Support\Facades\Auth;

class FixedDepartureController extends Controller
{
    public function domestic(){
        $domestic_fd = FixedDeparture::where('international_or_domestic', 'domestic')->get();
        return view('domestic', compact('domestic_fd'));
    }
    
    public function international(){
        $international_fd = FixedDeparture::where('international_or_domestic', 'international')->get();
        return view('international', compact('international_fd'));
    }
}
