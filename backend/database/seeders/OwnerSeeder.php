<?php

namespace Database\Seeders;

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
            'name' => 'ownername',
            'email' => 'owner2@email.com',
            'password' => Hash::make('password'),
            'created_at' => '2011/01/12 11:11:11'
        ]);
        DB::table('owners')->insert([
            'name' => 'ownername2',
            'email' => 'owner3@email.com',
            'password' => Hash::make('password'),
            'created_at' => '2011/01/12 11:11:11'
        ]);
        DB::table('owners')->insert([
            'name' => 'ownername3',
            'email' => 'owner4@email.com',
            'password' => Hash::make('password'),
            'created_at' => '2011/01/12 11:11:11'
        ]);
    }
}
