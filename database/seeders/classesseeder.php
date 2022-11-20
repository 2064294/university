<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class classesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'name'=>'philosophy',
            'category'=>'liberal arts',
            'room'=>'A101',
            'professor'=>'Mr.suzuki',
            'time'=>'Monday first',
        ]);
        
        DB::table('classes')->insert([
            'name'=>'statistics',
            'category'=>'science',
            'room'=>'A102',
            'professor'=>'Mrs.itou',
            'time'=>'Monday second',
        ]);
        
        DB::table('classes')->insert([
            'name'=>'politics economics',
            'category'=>'liberal arts',
            'room'=>'B101',
            'professor'=>'Mr.yamada',
            'time'=>'Tuesday first',
        ]);
    }
}
