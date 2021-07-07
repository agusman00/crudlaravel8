<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('karyawans')->insert ([
            'namadepan'=> 'AgusmanPori',
            'namabelakang'=> 'Pori',
            'perusahaan'=> 'AgungTrisulaMandiri',
            'email'=> 'agumanpori00@gmail.com',
            'tlp'=> '089636457171',
            
        ]);
    }
}
