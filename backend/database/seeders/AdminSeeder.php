<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'name',
            'email' => 'admin3@email.com',
            'password' => Hash::make('password'),
            'created_at' => '2011/01/12 11:11:11'
        ]);
    }
}
