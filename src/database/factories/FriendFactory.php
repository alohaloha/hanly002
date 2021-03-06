<?php

namespace Database\Factories;

use App\Models\Friend;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FriendFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Friend::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->name($gender = null),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'image_path' => null,
            'remember_token' => Str::random(10),
        ];
    }
}
