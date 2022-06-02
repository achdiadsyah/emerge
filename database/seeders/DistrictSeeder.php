<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::truncate();

        $file = fopen(base_path("database/data/DistrictData.csv"), "r");

        $firstLine = true;
        while (($data = fgetcsv($file, 2000, ";")) !== FALSE) {
            if (!$firstLine) {
                District::create([
                    "city_id" => $data['0'],
                    "name" => $data['1']
                ]);    
            }
            $firstLine = false;
        }
   
        fclose($file);  
    }
}
