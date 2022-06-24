<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TabelPropinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propinsi')->insert([
            ['nama_propinsi'=>'D.I. Yogyakarta'],
            ['nama_propinsi'=>'Jawa Tengah'],
            ['nama_propinsi'=>'Jawa Timur']
        ]);
    }
}
