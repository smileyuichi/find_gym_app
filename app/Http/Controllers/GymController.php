<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;

use Illuminate\Support\Facades\DB;

class GymController extends Controller
{
    public function index(Request $request)
    {
        // $search_area = DB::table('gyms')->join('areas','areas.id','=','gyms.area_id')->select('gyms.name','areas.name')->get();
        $search_area = 'test';

        if(isset($request->name))
        {
            $param = ['gym_name' => $request->name];
            // ジムの名前で検索とヒット件数
            $items = DB::table('gyms')->join('areas','gyms.area_id','=','areas.id')->where('gyms.name','like','%'. $param['gym_name'] . '%')->select('gyms.*','areas.name as area_name')->paginate(5);
            $search_count = DB::table('gyms')->where('name','like','%'. $param['gym_name'] . '%')->count();
        }elseif(isset($request->feature))
        {
            $param = ['feature' => $request->feature];
            // ジムの特徴で検索とヒット件数
            $items = DB::table('gyms')->join('areas','gyms.area_id','=','areas.id')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.*','features.id','areas.name as area_name')->where('features.name','like', '%'.$param['feature'].'%')->paginate(5);
            $search_count = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.*','features.id')->where('features.name','like', '%'.$param['feature'].'%')->count();
        }elseif(isset($request->address))
        {
            $param = ['address'=> $request->address];
            // ジムの住所で検索とヒット件数
            $items = DB::table('gyms')->join('areas','gyms.area_id','=','areas.id')->where('address','like','%'. $param['address'] . '%')->select('gyms.*','areas.name as area_name')->paginate(5);
            $search_count = DB::table('gyms')->where('address','like','%'. $param['address'] . '%')->count();
        }else
        {
            $items = DB::table('gyms')->join('areas','gyms.area_id','=','areas.id')->select('gyms.*','areas.name as area_name')->paginate(5);
            $search_count = DB::table('gyms')->count();
        }
        // ジムの特徴を列挙する
        $features = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.id','features.name as feature_name')->get();
        $val = [
            'items' => $items,
            'search_count' => $search_count,
            'features' => $features,
        ];

        return view('gyms.index', $val);
    }

    public function show($id)
    {
        $test=3.9;
        // ジムの特徴を列挙する
        $features = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->where('gyms.id','=',$id)->select('gyms.name','features.name as feature_name')->get();
        // ジムのエリアを表示する
        $area = DB::table('gyms')->join('areas','gyms.area_id','=','areas.id')->where('gyms.id','=',$id)->select('gyms.name','areas.name as area_name')->first();

        $val=[
            'gym' => Gym::findOrFail($id),
            'test' => $test,
            'features' => $features,
            'area' => $area,
        ];

        return view('gyms.show',$val);
    }



}

