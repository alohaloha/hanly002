<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eloquents\Friend;
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
        \App\Models\Eloquents\Friend::create([
            'nickname' => '松谷',
            'email' => 'test@hoge.com',
            'password' => bcrypt('this is password'),
            'image_path' => null,
            'remember_token' => Str::random(10),
        ]);
        // FriendFactoryの定義に合わせて10件のデータを作ってくれー
        // 松谷さん手本
        // factory(\App\Models\Eloquents\Friend::class, 10)->create();
        // どっかから拾いものコード（公式だったと思うんだけど。。）
        // Friend::factory()->count(10)->create();
        \App\Models\Eloquents\Friend::factory()->times(10)->create();
        //公式 seeding
        // Friend::factory()
        //     ->times(10)
        //     ->create();
    }
}
