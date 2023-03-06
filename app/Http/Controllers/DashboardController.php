<?php

namespace App\Http\Controllers;

use App\Models\Personalinfo;
use App\Models\specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $personalinfo = Personalinfo::where('userID',Auth::user()->id)->first();
        $specification = specification::where('user_id',Auth::user()->id)->first();
        // dd($personalinfo);
        return view('dashboard2',compact(['personalinfo','specification']));

    }
}
