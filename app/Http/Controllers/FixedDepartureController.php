<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\FixedDeparture;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FDImport;

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

    public function fileImportExport()
    {
       return view('admin.file-import');
    }

    public function fileImport(Request $request){
        Excel::import(new FDImport, $request->file('file')->store('temp'));
        return back()->with('success', 'FDs Uploaded Successfully');
    }
}
