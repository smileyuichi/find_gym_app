<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * $table->increments('id');
     * $table->string('name');
     * $table->text('outline');
     * $table->string('postal_code');
     * $table->string('address');
     * $table->float('latitude');
     * $table->float('longtitude');
     * 
     * @return void
     **/

    public function run()
    {
        $params = [
            'name' => 'エニタイムフィットネス江坂店',
            'outline' => '充実したマシン',
            'postal_code' => '123-2344',
            'address' => '大阪府吹田市江坂町1丁目',
            'latitude' => 132.1234,
            'longtitude' => 135.1121345,
        ];
        DB::table('gyms')->insert($params);
        
        $params = [
            'name' => 'エニタイムフィットネス茨木店',
            'outline' => '24h年中無休',
            'postal_code' => '345-2344',
            'address' => '大阪府茨木市双葉町町1丁目',
            'latitude' => 132.2344,
            'longtitude' => 135.2313345,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => 'ザバス高槻店',
            'outline' => '20年の老舗',
            'postal_code' => '432-1254',
            'address' => '大阪府高槻市大畑町1丁目',
            'latitude' => 123.14534,
            'longtitude' => 133.13451345,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => 'コナミスポーツ梅田店',
            'outline' => 'リニューアルオープン',
            'postal_code' => '012-2324',
            'address' => '大阪府大阪市北区茶屋町4丁目',
            'latitude' => 132.346322,
            'longtitude' => 135.78653,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => 'セントラル住之江店',
            'outline' => 'お年寄りに人気',
            'postal_code' => '234-5563',
            'address' => '大阪府中央区住之江3丁目',
            'latitude' => 133.34,
            'longtitude' => 136.1132159,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => 'コナミスポーツ高槻店',
            'outline' => '駅近徒歩5分',
            'postal_code' => '032-2226',
            'address' => '大阪府高槻市城北町3丁目',
            'latitude' => 138.346322,
            'longtitude' => 130.78653,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => 'セントラル心斎橋店',
            'outline' => '若者が集う',
            'postal_code' => '238-0063',
            'address' => '大阪府中区心斎橋2丁目',
            'latitude' => 131.23521,
            'longtitude' => 136.00984,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => '東急オアシス茨木店',
            'outline' => '24hに対応中',
            'postal_code' => '567-0324',
            'address' => '大阪府茨木市真砂1丁目',
            'latitude' => 132.00098,
            'longtitude' => 133.89876,
        ];
        DB::table('gyms')->insert($params);

        $params = [
            'name' => 'セントラル新大阪店',
            'outline' => '仕事帰りのサラリーマンに人気',
            'postal_code' => '551-8173',
            'address' => '大阪府北区北淡路1丁目',
            'latitude' => 133.9901,
            'longtitude' => 136.8183459,
        ];
        DB::table('gyms')->insert($params);


    }
}
