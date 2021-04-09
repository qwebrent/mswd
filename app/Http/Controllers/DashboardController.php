<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\PWDInfo;
use App\Barangay;

class DashboardController extends Controller
{
    public function admin(){

        $brgys = Barangay::withCount('pwdinfos')->get();

        $maleCount = PWDInfo::where('gender_id', 1)->count();
        $femaleCount = PWDInfo::where('gender_id', 2)->count();

        return view('backend.index', compact('brgys', 'maleCount', 'femaleCount'));
    }
}
