<?php

namespace Database\Seeders;

use App\Models\Pelamar;
use Illuminate\Database\Seeder;

class ImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelamar::truncate();
  
        $csvFile = fopen(base_path("database/data/pelamar.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Pelamar::create([
                    "id" => $data['0'],
                    "nama" => $data['1'],
                    "email" => $data['2'],
                    "nohp" => $data['3'],
                    "departemen" => $data['4'],
                    "k1_pengalaman" => $data['5'],
                    "k2_pendidikan" => $data['6'],
                    "k3_psikologi" => $data['7'],
                    "k4_keahlian" => $data['8'],
                    "k5_umur" => $data['9'],
                    "k6_toefl" => $data['10'],
                    "k7_ipk" => $data['11'],
                    "rekomendasi" => $data['12']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
