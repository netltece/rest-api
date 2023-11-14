<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Саранск'],
            ['name' => 'Рузаевка'],
            ['name' => 'Волгоград'],
            ['name' => 'Казань'],
            ['name' => 'Тула'],
            ['name' => 'Москва'],
            ['name' => 'Архангельск'],
            ['name' => 'Пятигорск'],
            ['name' => 'Омск'],
            ['name' => 'Лесозаводск'],
            ['name' => 'Владивосток']
        ]);
    }
}
