<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class circlesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circles')->insert([
            'name'=>'a',
            'category'=>'tennis',
            'profile'=>'This is a tennis circle',
            'user_id'=>'1',
        ]);
        DB::table('circles')->insert([
            'name'=>'b',
            'category'=>'basketball',
            'profile'=>'This is a basketball circle',
            'user_id'=>'2',
        ]);
        DB::table('circles')->insert([
            'name'=>'c',
            'category'=>'taravel',
            'profile'=>'This is a traveling circle',
            'user_id'=>'3',
        ]);
    }
}
