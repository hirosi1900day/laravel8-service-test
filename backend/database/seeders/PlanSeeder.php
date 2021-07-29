<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'owner_id' => 1,
            'name' => 'plan名が入ります',
            'content' => 'ここに内容が入ります',
            'is_selling' => 1
        ]);
        DB::table('plans')->insert([
            'owner_id' => 1,
            'name' => 'plan名が入ります2',
            'content' => 'ここに内容が入ります2',
            'is_selling' => 1
        ]);
    }
}
