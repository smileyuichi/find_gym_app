<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class GymController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->id))
        {
            $param = ['id' => $request->id];
            $items = DB::select('select * from gyms where id = :id',$param);
        } else {
            $items = DB::table("gyms")->get(['name']);
        }
        
        return view('gyms.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $name = $request->name;
        $items = DB::table('gyms')->where('name','like','%' . $name . '%')->get();
        return view('gyms.show',['items' => $items]);
    }
}
