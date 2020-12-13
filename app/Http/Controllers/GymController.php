<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;

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
            $items = DB::table("gyms")->paginate(5);
        }
        
        return view('gyms.index', ['items' => $items]);
    }

    public function show($id)
    {
        // $param = ['id' => $gym->id];
        // $item = DB::select('select * from gyms where id =:id',$param);
        // if($item!=null)
        // {
            return view('gyms.show',['gym' => Gym::findOrFail($id)]);
        // }else{
        //     return redirect('/');
        // }
    }
}
