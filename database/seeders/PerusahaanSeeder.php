<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('perusahaans')->insert ([
            'nama'=> 'PT Agung Trisula Mandiri',
            'email'=> 'agumanpori00@gmail.com',
            'foto'=> 'foto1.jpg',
            
        ]);
    }
}
