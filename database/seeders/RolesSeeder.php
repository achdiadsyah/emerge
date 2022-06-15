<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'    => 1,
                'role_name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'id'    => 2,
                'role_name' => 'Investor',
                'slug' => 'investor',
            ],
            [
                'id'    => 3,
                'role_name' => 'Startup',
                'slug' => 'startup',
            ],
        ]);
    }
}
