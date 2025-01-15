<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            DB::table('posts')->insert([
                [
                    'title' => Str::random(10),
                    'body' => Str::random(10) . '@example.com',
                    'image' => '../images/seeder/img1.jpeg',
                ],
                [
                    'title' => Str::random(10),
                    'body' => Str::random(10) . '@example.com',
                    'image' => '../images/seeder/img2.jpeg',
                ],
                [
                    'title' => Str::random(10),
                    'body' => Str::random(10) . '@example.com',
                    'image' => '../images/seeder/img3.jpeg',
                ],
                [
                    'title' => Str::random(10),
                    'body' => Str::random(10) . '@example.com',
                    'image' => '../images/seeder/img4.jpeg',
                ],
            ])
        ];
    }
}
