<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    //
    public function index(Request $request){
        // 大阪全体の件数
        $osaka_area = DB::table('gyms')->count();
        // 大阪市内の件数
        $osaka_city = DB::table('gyms')->where('address','like','%大阪市%')->count();
        // 堺市内の件数
        $sakai_city = DB::table('gyms')->where('address','like','%堺市%')->count();
        // 大阪府内の件数
        $osaka_prefecture = $osaka_area - ($osaka_city + $sakai_city);
        // feature_は特徴の件数
        $feature_total_fitness = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.name','features.id')->where('features.name','トータルフィットネス')->count();
        $feature_24h = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.name','features.id')->where('features.name','24時間営業')->count();
        $feature_studio_program = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.name','features.id')->where('features.name','スタジオプログラム')->count();
        $feature_private_gym = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.name','features.id')->where('features.name','プライベートジム')->count();
        $feature_establish_clinic = DB::table('gyms')->join('feature_gym','gyms.id','=','feature_gym.gym_id')->join('features','features.id','=','feature_gym.feature_id')->select('gyms.name','features.id')->where('features.name','整骨院併設')->count();
        // 変数をまとめてviewに返す
        $val = [
            'osaka_area' => $osaka_area,
            'osaka_city' => $osaka_city,
            'sakai_city' => $sakai_city,
            'osaka_prefecture' => $osaka_prefecture,
            'feature_total_fitness' => $feature_total_fitness,
            'feature_24h' => $feature_24h,
            'feature_studio_program' => $feature_studio_program,
            'feature_private_gym' => $feature_private_gym,
            'feature_establish_clinic' => $feature_establish_clinic,
        ];
        return view('tops.welcome', $val);
    }
}
