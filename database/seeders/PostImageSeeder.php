<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_images')->insert([
            [
                'src' => '../images/seeder/img1.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img1.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img2.jpeg',
                'post_id' => rand(1, 24)
            ],
            [

                'src' => '../images/seeder/img3.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img24.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img5.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img6.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img7.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img8.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img9.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img10.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img11.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img12.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img13.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img124.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img15.jpeg',
                'post_id' => rand(1, 24)


            ],
            [

                'src' => '../images/seeder/img16.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img17.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img18.jpeg',
                'post_id' => rand(1, 24)

            ],
            [
                'src' => '../images/seeder/img19.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img20.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img20.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img21.jpeg',
                'post_id' => rand(1, 24)
            ],
            [
                'src' => '../images/seeder/img22.jpeg',
                'post_id' => rand(1, 24)
            ],

        ]);
    }
}
