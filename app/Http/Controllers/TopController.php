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
        $area_val = [
            'osaka_area' => $osaka_area,
            'osaka_city' => $osaka_city,
            'sakai_city' => $sakai_city,
            'osaka_prefecture' => $osaka_prefecture,
        ];
        return view('tops.welcome', $area_val);
    }
}
