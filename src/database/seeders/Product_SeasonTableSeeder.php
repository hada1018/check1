<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // キウイ、秋、冬
        $param = ['product_id' => 1, 'season_id' => 3];
        DB::table('product_season')->insert($param);
        $param = ['product_id' => 1, 'season_id' => 4];
        DB::table('product_season')->insert($param);

        // ストロベリー、春
        $param = ['product_id' => 2, 'season_id' => 1];
        DB::table('product_season')->insert($param);

        // オレンジ、冬
        $param = ['product_id' => 3, 'season_id' => 4];
        DB::table('product_season')->insert($param);

        // スイカ、夏
        $param = ['product_id' => 4, 'season_id' => 2];
        DB::table('product_season')->insert($param);

        // ピーチ、夏
        $param = ['product_id' => 5, 'season_id' => 2];
        DB::table('product_season')->insert($param);

        // シャインマスカット、夏、秋
        $param = ['product_id' => 6, 'season_id' => 2];
        DB::table('product_season')->insert($param);
        $param = ['product_id' => 6, 'season_id' => 3];
        DB::table('product_season')->insert($param);

        // パイナップル 、春、夏
        $param = ['product_id' => 7, 'season_id' => 1];
        DB::table('product_season')->insert($param);
        $param = ['product_id' => 7, 'season_id' => 2];
        DB::table('product_season')->insert($param);

        // ブドウ、夏、秋
        $param = ['product_id' => 8, 'season_id' => 2];
        DB::table('product_season')->insert($param);
        $param = ['product_id' => 8, 'season_id' => 3];
        DB::table('product_season')->insert($param);

        // バナナ、夏
        $param = ['product_id' => 9, 'season_id' => 2];
        DB::table('product_season')->insert($param);

        // メロン、春、夏
        $param = ['product_id' => 10, 'season_id' => 1];
        DB::table('product_season')->insert($param);
        $param = ['product_id' => 10, 'season_id' => 2];
        DB::table('product_season')->insert($param);

    }
}
