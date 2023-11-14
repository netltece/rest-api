<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('place_issues')->insert([
            ['name' => 'МВД Саранска'],
            ['name' => 'МВД Казани'],
            ['name' => 'МВД Волгограда'],
            ['name' => 'МВД Москвы'],
            ['name' => 'МВД Пятигорска'],
            ['name' => 'МВД Владивостока']
        ]);
    }
}
