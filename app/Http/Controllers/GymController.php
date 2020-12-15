<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;

use Illuminate\Support\Facades\DB;

class GymController extends Controller
{
    public function index(Request $request)
    {

        if(isset($request->name))
        {
            $param = ['gym_name' => $request->name];
            // ジムの名前で検索する
            $items = DB::table('gyms')->where('name','like','%'. $param['gym_name'] . '%')->paginate(5);
        }elseif(isset($request->feature))
        {
            $param = ['feature' => $request->feature];
            // ジムの特徴で検索する
            $items = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.*','features.id')->where('features.name','like', '%'.$param['feature'].'%')->paginate(5);
        
        }else{
            var_dump('miss');
            $items = DB::table('gyms')->paginate(5);
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
