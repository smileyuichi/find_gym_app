<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    //
    public function index(Request $request){
        $count = DB::table('gyms')->count();
        return view('tops.welcome', ['count' => $count]);
    }
}
