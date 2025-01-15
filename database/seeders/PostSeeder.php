<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Str;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('posts')->insert([
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img1.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img2.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img3.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img4.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img5.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img6.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img7.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img8.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img9.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img10.jpeg',
            ],
            [
                'title' => Str::random(10),
                'body' => Str::random(10) ,
                'image' => '../images/seeder/img11.jpeg',
            ],
        ]);


    }
}
