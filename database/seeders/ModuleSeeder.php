<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('modules')
            ->insertOrIgnore([
                    [
                        'id' => 'COMP50016',
                        'name' => 'Server-Side Programming',
                        'lead_tutor_id' => 'gdm1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id' => 'COMP50017',
                        'name' => 'Web Development',
                        'lead_tutor_id' => 'flk1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id' => 'COSE50586',
                        'name' => 'Web & Mobile Application Development',
                        'lead_tutor_id' => 'gdm1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id' => 'COSE50637',
                        'name' => 'Engineering Software Applications',
                        'lead_tutor_id' => 'bb11',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id' => 'COSE50582',
                        'name' => 'Object-Oriented Application Engineering',
                        'lead_tutor_id' => 'gdm1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id' => 'COIS51091',
                        'name' => 'Enterprise Cloud Computing',
                        'lead_tutor_id' => 'cib1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id' => 'COIS51092',
                        'name' => 'Strategic Information Systems Management',
                        'lead_tutor_id' => 'edw1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
                ]
            );
    }
}
