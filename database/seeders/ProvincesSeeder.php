<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provinces;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(base_path("database/data/ProvinceData.csv"), "r");

        $firstLine = true;
        while (($data = fgetcsv($file, 2000, ";")) !== FALSE) {
            if (!$firstLine) {
                Provinces::create([
                    "id" => $data['0'],
                    "name" => $data['1']
                ]);    
            }
            $firstLine = false;
        }
   
        fclose($file);  
    }
}
