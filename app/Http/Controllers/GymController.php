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
            // ジムの名前で検索とヒット件数
            $items = DB::table('gyms')->where('name','like','%'. $param['gym_name'] . '%')->paginate(5);
            $search_count = DB::table('gyms')->where('name','like','%'. $param['gym_name'] . '%')->count();
        }elseif(isset($request->feature))
        {
            $param = ['feature' => $request->feature];
            // ジムの特徴で検索とヒット件数
            $items = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.*','features.id')->where('features.name','like', '%'.$param['feature'].'%')->paginate(5);
            $search_count = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.*','features.id')->where('features.name','like', '%'.$param['feature'].'%')->count();
        }elseif(isset($request->address))
        {
            $param = ['address'=> $request->address];
            // ジムの住所で検索とヒット件数
            $items = DB::table('gyms')->where('address','like','%'. $param['address'] . '%')->paginate(5);
            $search_count = DB::table('gyms')->where('address','like','%'. $param['address'] . '%')->count();
        }else
        {
            var_dump('miss');
            $items = DB::table('gyms')->paginate(5);
            $search_count = DB::table('gyms')->count();
        }
        $val = [
            'items' => $items,
            'search_count' => $search_count,
        ];

        return view('gyms.index', $val);
    }

    public function show($id)
    {
            return view('gyms.show',['gym' => Gym::findOrFail($id)]);
    }
}
