<?php

namespace Database\Seeders;

use App\Models\Friend;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class LocalDevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Friend::create([
        //     'nickname' => '松谷',
        //     'email' => 'test@hoge.com',
        //     'password' => bcrypt('this is password'),
        //     'image_path' => null,
        //     'remember_token' => Str::random(10),
        // ]);
        // Factoryの定義に合わせて、１０件のデータをつくってくれー
        Friend::factory()->count(10)->create();
    }
}
