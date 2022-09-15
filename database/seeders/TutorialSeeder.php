<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('tutorials')
            ->insertOrIgnore([
                [
                    'module_id' => 'COMP50016',
                    'time_start' => '2022-01-20 10:00:00',
                    'time_end' => '2022-01-20 13:00:00',
                    'room' => 'S507',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COMP50017',
                    'time_start' => '2022-01-24 14:00:00',
                    'time_end' => '2022-01-24 17:00:00',
                    'room' => 'S503',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COSE50586',
                    'time_start' => '2022-01-24 11:00:00',
                    'time_end' => '2022-01-24 13:00:00',
                    'room' => 'S509',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COSE50586',
                    'time_start' => '2022-01-23 15:00:00',
                    'time_end' => '2022-01-23 17:00:00',
                    'room' => 'S503',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COSE50637',
                    'time_start' => '2022-01-24 09:00:00',
                    'time_end' => '2022-01-24 10:00:00',
                    'room' => 'S507',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COSE50637',
                    'time_start' => '2022-01-24 10:00:00',
                    'time_end' => '2022-01-24 11:00:00',
                    'room' => 'S507',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COSE50582',
                    'time_start' => '2022-01-21 14:00:00',
                    'time_end' => '2022-01-21 17:00:00',
                    'room' => 'S507',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COIS51091',
                    'time_start' => '2019-09-25 09:00:00',
                    'time_end' => '2022-09-25 12:00:00',
                    'room' => 'S205',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'module_id' => 'COIS51092',
                    'time_start' => '2019-09-23 13:00:00',
                    'time_end' => '2022-09-23 15:00:00',
                    'room' => 'S501',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
