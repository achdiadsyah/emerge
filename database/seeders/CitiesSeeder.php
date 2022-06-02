<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cities;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::truncate();

        $file = fopen(base_path("database/data/CitiesData.csv"), "r");

        $firstLine = true;
        while (($data = fgetcsv($file, 2000, ";")) !== FALSE) {
            if (!$firstLine) {
                Cities::create([
                    "province_id" => $data['0'],
                    "name" => $data['1']
                ]);    
            }
            $firstLine = false;
        }
   
        fclose($file);  
    }
}
