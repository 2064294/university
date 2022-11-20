<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class introductionsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('introductions')->insert([
            'title'=>'a introduction',
            'body'=>'very good',
            'circle_id'=>'1',
        ]);
        
        DB::table('introductions')->insert([
            'title'=>'b introduction',
            'body'=>'good',
            'circle_id'=>'2',
        ]);
        
        DB::table('introductions')->insert([
            'title'=>'c introduction',
            'body'=>'soso',
            'circle_id'=>'3',
        ]);
    }
}
