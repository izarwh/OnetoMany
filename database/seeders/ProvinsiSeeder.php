<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //
        $province=['Nanggroe Aceh Darussalam',
        'Sumatera Utara',
        'Sumatera Selatan',
        'Sumatera Barat',
        'Bengkulu',
        'Riau',
        'Kepulauan Riau',
        'Jambi',
        'Lampung',
        'Bangka Belitung',
        'Kalimantan Barat',
        'Kalimantan Timur',
        'Kalimantan Selatan',
        'Kalimantan Tengah',
        'Kalimantan Utara',
        'Banten',
        'DKI Jakarta',
        'Jawa Barat',
        'Jawa Tengah',
        'DI Yogyakarta',
        'Jawa Timur',
        'Bali',
        'Nusa Tenggara Timur',
        'Nusa Tenggara Barat',
        'Gorontalo',
        'Sulawesi Barat',
        'Sulawesi Tengah',
        'Sulawesi Utara',
        'Sulawesi Tenggara',
        'Sulawesi Selatan',
        'Maluku Utara',
        'Maluku',
        'Papua barat',
        'Papua',
        'Seruai',
        'Sorong'];

        for($i = 0;$i < count($province);$i++){ 

            DB::table('provinsi')->insert([
                'nama' => $province[$i]
            ]);
        };
    }
}
