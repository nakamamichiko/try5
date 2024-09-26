<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('owners')->insert([

            [
                'name' => 'test7',
                'email' => 'test7@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/02/01 11:11:11'    
            ],
            [
                'name' => 'test8',
                'email' => 'test8@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/02/01 11:11:11'    
            ],
            [
                'name' => 'test9',
                'email' => 'test9@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/02/01 11:11:11'    
            ],
            [
                'name' => 'test10',
                'email' => 'test10@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/02/01 11:11:11'    
            ],
        ]);
    }
}
