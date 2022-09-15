<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('tutors')
            ->insertOrIgnore([
                [
                    'id' => 'flk1',
                    'name' => 'Fiona Knight',
                    'room' => 'S334',
                    'email' => 'f.l.knight@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'gdm1',
                    'name' => 'Graham Mansfield',
                    'room' => 'S309',
                    'email' => 'g.d.mansfield@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'rao1',
                    'name' => 'Robin Oldham',
                    'room' => 'S338',
                    'email' => 'r.a.oldham@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'jel1',
                    'name' => 'Janet Lawton',
                    'room' => 'S334',
                    'email' => 'j.e.lawton@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'kch1',
                    'name' => 'Kelvin Hilton',
                    'room' => 'S307',
                    'email' => 'k.c.hilton@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'bb11',
                    'name' => 'Benhur Bakhtiari Bastaki',
                    'room' => 'S341',
                    'email' => 'b.b.bastaki@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'aj34',
                    'name' => 'Adam Jacobs',
                    'room' => 'N/A',
                    'email' => 'adam.jacobs@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'cib1',
                    'name' => 'Carolin Bauer',
                    'room' => 'S305',
                    'email' => 'c.i.bauer@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'edw1',
                    'name' => 'Euan Wilson',
                    'room' => 'S306',
                    'email' => 'e.d.wilson@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'jjc1',
                    'name' => 'Justin Champion',
                    'room' => 'S332',
                    'email' => 'j.j.champion@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'oaa2',
                    'name' => 'Oluwasegun Adedugbe',
                    'room' => 'N/A',
                    'email' => 'oluwasegun.adedugbe1@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'djb4',
                    'name' => 'Daniel Buxton',
                    'room' => 'S302',
                    'email' => 'daniel.buxton@staffs.ac.uk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
