<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kriteria::truncate();
  
        $csvFile = fopen(base_path("database/data/kriteria.csv"), "r");
  
        $firstline = false;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Kriteria::create([
                    "kriteria" => $data['0'],
                    "subkriteria" => $data['1'],
                    "bobot" => $data['2'],
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
