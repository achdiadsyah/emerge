<?php

namespace Database\Seeders;
use App\Models\Countries;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(base_path("database/data/CountriesData.csv"), "r");

        $firstLine = true;
        while (($data = fgetcsv($file, 2000, ";")) !== FALSE) {
            if (!$firstLine) {
                Countries::create([
                    "name" => $data['0'],
                    "phone_code" => $data['1']
                ]);    
            }
            $firstLine = false;
        }
   
        fclose($file);  
    }
}
