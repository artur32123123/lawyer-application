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
        $descount = [10, 15, 20, 25, 30, 35, 40, 45, 50];
        DB::table('posts')->insert([
            [
                'title' => $motorcycles[0], // Harley-Davidson
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[0], // Harley-Davidson
                'body' => 'Легендарный американский мотоцикл, символ свободы и бунтарства. Отличается мощным двигателем, глубоким звуком выхлопа и культовым дизайном. Идеален для любителей классики и дальних путешествий.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[1], // Yamaha
                'body' => 'Японский мотоцикл, который славится своей надежностью и универсальностью. Подходит для городских поездок, спортивной езды и даже внедорожных приключений.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[2], // Honda
                'body' => 'Один из самых популярных мотоциклов в мире, известный своей экономичностью и долговечностью. Отличный выбор для начинающих и опытных райдеров.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[3], // Kawasaki
                'body' => 'Мощный и агрессивный мотоцикл, который впечатляет своей динамикой и стилем. Идеален для любителей скорости и адреналина.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[4], // Ducati
                'body' => 'Итальянский мотоцикл с уникальным дизайном и высокими характеристиками. Подходит для тех, кто ценит премиальное качество и спортивный стиль.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[5], // BMW
                'body' => 'Немецкий мотоцикл, известный своей инженерной точностью и комфортом. Отличный выбор для туризма и длительных поездок.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[6], // Suzuki
                'body' => 'Японский мотоцикл, который славится своей универсальностью и доступной ценой. Подходит для различных стилей езды.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[7], // KTM
                'body' => 'Австрийский мотоцикл, который выделяется своей мощностью и внедорожными характеристиками. Идеален для любителей экстремальной езды.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[8], // Triumph
                'body' => 'Британский мотоцикл с классическим дизайном и современными технологиями. Подходит для тех, кто ценит стиль и комфорт.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[9], // Aprilia
                'body' => 'Итальянский мотоцикл, который впечатляет своей спортивной динамикой и передовыми технологиями. Идеален для гонок и скоростной езды.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => 'Итальянский мотоцикл с уникальным поперечным расположением двигателя. Подходит для тех, кто ищет что-то необычное и стильное.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[9], // Aprilia
                'body' => 'Итальянский мотоцикл, который впечатляет своей спортивной динамикой и передовыми технологиями. Идеален для гонок и скоростной езды.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[8], // Triumph
                'body' => 'Британский мотоцикл с классическим дизайном и современными технологиями. Подходит для тех, кто ценит стиль и комфорт.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[7], // KTM
                'body' => 'Австрийский мотоцикл, который выделяется своей мощностью и внедорожными характеристиками. Идеален для любителей экстремальной езды.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[6], // Suzuki
                'body' => 'Японский мотоцикл, который славится своей универсальностью и доступной ценой. Подходит для различных стилей езды.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[5], // BMW
                'body' => 'Немецкий мотоцикл, известный своей инженерной точностью и комфортом. Отличный выбор для туризма и длительных поездок.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[4], // Ducati
                'body' => 'Итальянский мотоцикл с уникальным дизайном и высокими характеристиками. Подходит для тех, кто ценит премиальное качество и спортивный стиль.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[3], // Kawasaki
                'body' => 'Мощный и агрессивный мотоцикл, который впечатляет своей динамикой и стилем. Идеален для любителей скорости и адреналина.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[2], // Honda
                'body' => 'Один из самых популярных мотоциклов в мире, известный своей экономичностью и долговечностью. Отличный выбор для начинающих и опытных райдеров.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[1],
                'body' => 'Японский мотоцикл, который славится своей надежностью и универсальностью. Подходит для городских поездок, спортивной езды и даже внедорожных приключений.',
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10],
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10],
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10],
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10],
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10],
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)],
            ],
            [
                'title' => $motorcycles[10],
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
            [
                'title' => $motorcycles[10], // Moto Guzzi
                'body' => Str::random(10),
                'price' => rand(200000, 4000000),
                'descount' => $descount[array_rand($descount)], // Добавлен ключ 'price' с рандомным числом
            ],
        ]);
    }
}
