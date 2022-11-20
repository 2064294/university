<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'student1',
            'password'=>'12345',
            'number'=>'2064001',
            'email'=>'user.gmail.com',
            'grade'=>'1',
            'sex'=>'man',
        ]);
        DB::table('users')->insert([
            'name'=>'student2',
            'password'=>'12345',
            'number'=>'2064002',
            'email'=>'user2.gmail.com',
            'grade'=>'1',
            'sex'=>'woman',
        ]);
        DB::table('users')->insert([
            'name'=>'student3',
            'password'=>'12345',
            'number'=>'2064003',
            'email'=>'user3.gmail.com',
            'grade'=>'2',
            'sex'=>'man',
        ]);
    }
}
