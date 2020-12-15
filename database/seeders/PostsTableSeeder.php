<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'price'=>200,
            'store'=>'ファミマ',
            'product_name'=>'ピザポテ',
            'text' => '夜中に食べたくなる',
        ];

        DB::table('posts')->insert($params);
    }
}
