<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StartupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('startup_categories')->insert([
            [
                'id'    => 1,
                'name' => 'Logistics',
                'is_shown' => 1,
            ],
            [
                'id'    => 2,
                'name' => 'Web 3.0',
                'is_shown' => 1,
            ],
            [
                'id'    => 3,
                'name' => 'New Retail',
                'is_shown' => 1,
            ],
            [
                'id'    => 4,
                'name' => 'Healthcare',
                'is_shown' => 1,
            ],
            [
                'id'    => 5,
                'name' => 'Agriculture',
                'is_shown' => 1,
            ],
            [
                'id'    => 6,
                'name' => 'Aquaculture',
                'is_shown' => 1,
            ],
            [
                'id'    => 7,
                'name' => 'Deep Tech',
                'is_shown' => 1,
            ],
            [
                'id'    => 8,
                'name' => 'Education',
                'is_shown' => 1,
            ],
            [
                'id'    => 9,
                'name' => 'Consumer',
                'is_shown' => 1,
            ],
            [
                'id'    => 10,
                'name' => 'Finance',
                'is_shown' => 1,
            ],
        ]);
    }
}
