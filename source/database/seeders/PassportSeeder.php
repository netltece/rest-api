<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        DB::table('passports')->insert([[
            'series' => '8910',
            'number' => '420400',
            'date_issue' => '2023-10-12',
            'place_issue_id' => 1,
            'department_code' => '203550',
            'last_name' => 'Тимовкин',
            'first_name' => 'Антон',
            'father_name' => 'Юрьевич',
            'sex' => true,
            'birthday' => '2000-05-12',
            'birth_city_id' => 2,
            'reg_city_id' => 1
        ],[
            'series' => '8930',
            'number' => '432400',
            'date_issue' => '2023-10-08',
            'place_issue' => 2,
            'department_code' => '403550',
            'last_name' => 'Тимофеев',
            'first_name' => 'Евгений',
            'father_name' => 'Андреевич',
            'sex' => true,
            'birthday' => '2000-09-03',
            'birth_city_id' => 3,
            'reg_city_id' => 4
        ],[
            'series' => '8830',
            'number' => '432650',
            'date_issue' => '2023-08-04',
            'place_issue' => 3,
            'department_code' => '403550',
            'last_name' => 'Семенова',
            'first_name' => 'Мария',
            'father_name' => 'Александровна',
            'sex' => false,
            'birthday' => '2000-11-26',
            'birth_city_id' => 3,
            'reg_city_id' => 3
        ],[
            'series' => '8890',
            'number' => '420130',
            'date_issue' => '2023-02-02',
            'place_issue_id' => 4,
            'department_code' => '550600',
            'last_name' => 'Петров',
            'first_name' => 'Петр',
            'father_name' => 'Иванович',
            'sex' => true,
            'birthday' => '2000-02-11',
            'birth_city_id' => 5,
            'reg_city_id' => 6
        ],[
            'series' => '8295',
            'number' => '650200',
            'date_issue' => '2023-01-25',
            'place_issue_id' => 4,
            'department_code' => '550600',
            'last_name' => 'Иванов',
            'first_name' => 'Иван',
            'father_name' => 'Петрович',
            'sex' => true,
            'birthday' => '1999-04-24',
            'birth_city_id' => 6,
            'reg_city_id' => 6
        ],[
            'series' => '8450',
            'number' => '640200',
            'date_issue' => '2022-02-23',
            'place_issue_id' => 4,
            'department_code' => '550600',
            'last_name' => 'Иванова',
            'first_name' => 'Екатерина',
            'father_name' => 'Павловна',
            'sex' => false,
            'birthday' => '1992-11-02',
            'birth_city_id' => 8,
            'reg_city_id' => 6
        ], [
            'series' => '8455',
            'number' => '640200',
            'date_issue' => '2014-01-26',
            'place_issue_id' => 2,
            'department_code' => '521200',
            'last_name' => 'Окунев',
            'first_name' => 'Виктор',
            'father_name' => 'Геннадьевич',
            'sex' => true,
            'birthday' => '1993-08-02',
            'birth_city_id' => 1,
            'reg_city_id' => 4
        ],[
            'series' => '8311',
            'number' => '560300',
            'date_issue' => '2012-02-20',
            'place_issue_id' => 3,
            'department_code' => '680450',
            'last_name' => 'Артемов',
            'first_name' => 'Николай',
            'father_name' => 'Григорьевич',
            'sex' => true,
            'birthday' => '1996-03-19',
            'birth_city_id' => 8,
            'reg_city_id' => 3
        ],[
            'series' => '8616',
            'number' => '552940',
            'date_issue' => '2005-01-15',
            'place_issue_id' => 5,
            'department_code' => '690100',
            'last_name' => 'Кузнецов',
            'first_name' => 'Михаил',
            'father_name' => 'Анатольевич',
            'sex' => true,
            'birthday' => '1985-09-10',
            'birth_city_id' => 9,
            'reg_city_id' => 8
        ], [
            'series' => '8475',
            'number' => '660885',
            'date_issue' => '2002-10-25',
            'place_issue' => 6,
            'department_code' => '630740',
            'last_name' => 'Смирнов',
            'first_name' => 'Алексей',
            'father_name' => 'Степанович',
            'sex' => true,
            'birthday' => '1996-12-28',
            'birth_city_id' => 10,
            'reg_city_id' => 11
        ]]);
    }
}
