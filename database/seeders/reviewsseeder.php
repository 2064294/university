<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reviewsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title'=>'a review',
            'body'=>'very good',
            'user_id'=>'1',
            'class_id'=>'1',
            'introduction_id'=>'1',
        ]);
        
        DB::table('reviews')->insert([
            'title'=>'b review',
            'body'=>'good',
            'user_id'=>'2',
            'class_id'=>'2',
            'introduction_id'=>'2',
        ]);
        
        DB::table('reviews')->insert([
            'title'=>'c review',
            'body'=>'soso',
            'user_id'=>'3',
            'class_id'=>'3',
            'introduction_id'=>'3',
        ]);
    }
}
