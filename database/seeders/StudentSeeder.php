<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710072',
            'name' => 'Nila Ayu Setyaningrum',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '085233641670',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710029',
            'name' => 'Nissa Nursabrina',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '085707503180',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710121',
            'name' => 'Raden Dimas Erlangga',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '081259945857',
        ]);
    }
}
 