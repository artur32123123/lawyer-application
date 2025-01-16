<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Массив с названиями мотоциклов
        $motorcycles = [
            'Harley-Davidson',
            'Yamaha',
            'Honda',
            'Kawasaki',
            'Ducati',
            'BMW',
            'Suzuki',
            'KTM',
            'Triumph',
            'Aprilia',
            'Moto Guzzi'
        ];

        DB::table('posts')->insert([
            [
                'title' => $motorcycles[0], // Harley-Davidson
                'body' => Str::random(10),
                'image' => '../images/seeder/img1.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50), // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[0], // Harley-Davidson
                'body' => 'Легендарный американский мотоцикл, символ свободы и бунтарства. Отличается мощным двигателем, глубоким звуком выхлопа и культовым дизайном. Идеален для любителей классики и дальних путешествий.',
                'image' => '../images/seeder/img1.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[1], // Yamaha
                'body' => 'Японский мотоцикл, который славится своей надежностью и универсальностью. Подходит для городских поездок, спортивной езды и даже внедорожных приключений.',
                'image' => '../images/seeder/img2.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[2], // Honda
                'body' => 'Один из самых популярных мотоциклов в мире, известный своей экономичностью и долговечностью. Отличный выбор для начинающих и опытных райдеров.',
                'image' => '../images/seeder/img3.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[3], // Kawasaki
                'body' => 'Мощный и агрессивный мотоцикл, который впечатляет своей динамикой и стилем. Идеален для любителей скорости и адреналина.',
                'image' => '../images/seeder/img4.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[4], // Ducati
                'body' => 'Итальянский мотоцикл с уникальным дизайном и высокими характеристиками. Подходит для тех, кто ценит премиальное качество и спортивный стиль.',
                'image' => '../images/seeder/img5.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[5], // BMW
                'body' => 'Немецкий мотоцикл, известный своей инженерной точностью и комфортом. Отличный выбор для туризма и длительных поездок.',
                'image' => '../images/seeder/img6.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[6], // Suzuki
                'body' => 'Японский мотоцикл, который славится своей универсальностью и доступной ценой. Подходит для различных стилей езды.',
                'image' => '../images/seeder/img7.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[7], // KTM
                'body' => 'Австрийский мотоцикл, который выделяется своей мощностью и внедорожными характеристиками. Идеален для любителей экстремальной езды.',
                'image' => '../images/seeder/img8.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[8], // Triumph
                'body' => 'Британский мотоцикл с классическим дизайном и современными технологиями. Подходит для тех, кто ценит стиль и комфорт.',
                'image' => '../images/seeder/img9.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[9], // Aprilia
                'body' => 'Итальянский мотоцикл, который впечатляет своей спортивной динамикой и передовыми технологиями. Идеален для гонок и скоростной езды.',
                'image' => '../images/seeder/img10.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => 'Итальянский мотоцикл с уникальным поперечным расположением двигателя. Подходит для тех, кто ищет что-то необычное и стильное.',
                'image' => '../images/seeder/img11.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[9], // Aprilia
                'body' => 'Итальянский мотоцикл, который впечатляет своей спортивной динамикой и передовыми технологиями. Идеален для гонок и скоростной езды.',
                'image' => '../images/seeder/img12.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[8], // Triumph
                'body' => 'Британский мотоцикл с классическим дизайном и современными технологиями. Подходит для тех, кто ценит стиль и комфорт.',
                'image' => '../images/seeder/img13.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[7], // KTM
                'body' => 'Австрийский мотоцикл, который выделяется своей мощностью и внедорожными характеристиками. Идеален для любителей экстремальной езды.',
                'image' => '../images/seeder/img14.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[6], // Suzuki
                'body' => 'Японский мотоцикл, который славится своей универсальностью и доступной ценой. Подходит для различных стилей езды.',
                'image' => '../images/seeder/img15.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[5], // BMW
                'body' => 'Немецкий мотоцикл, известный своей инженерной точностью и комфортом. Отличный выбор для туризма и длительных поездок.',
                'image' => '../images/seeder/img16.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[4], // Ducati
                'body' => 'Итальянский мотоцикл с уникальным дизайном и высокими характеристиками. Подходит для тех, кто ценит премиальное качество и спортивный стиль.',
                'image' => '../images/seeder/img17.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[3], // Kawasaki
                'body' => 'Мощный и агрессивный мотоцикл, который впечатляет своей динамикой и стилем. Идеален для любителей скорости и адреналина.',
                'image' => '../images/seeder/img18.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[2], // Honda
                'body' => 'Один из самых популярных мотоциклов в мире, известный своей экономичностью и долговечностью. Отличный выбор для начинающих и опытных райдеров.',
                'image' => '../images/seeder/img19.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[1], // Yamaha
                'body' => 'Японский мотоцикл, который славится своей надежностью и универсальностью. Подходит для городских поездок, спортивной езды и даже внедорожных приключений.',
                'image' => '../images/seeder/img20.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50),
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'image' => '../images/seeder/img20.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50), // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'image' => '../images/seeder/img21.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50), // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'image' => '../images/seeder/img22.jpeg',
                'price' => rand(200000, 4000000),
                'descount' => rand(0, 50), // Добавлен ключ 'price' с рандомным числом
            ],

        ]);
    }
}
