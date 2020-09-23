<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // php artisan make:seeder〜で作ったファイルを指定
        $this->call([LocalDevelopSeeder::class]);
    }
}
