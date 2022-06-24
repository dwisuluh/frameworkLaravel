<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelKotaSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota')->insert([
            ['propinsi_id'=>1,'nama_kota'=>'Kodya Yogyakarta'],
            ['propinsi_id'=>1,'nama_kota'=>'Bantul'],
            ['propinsi_id'=>1,'nama_kota'=>'Sleman'],
            ['propinsi_id'=>1,'nama_kota'=>'Kulon Progo'],
            ['propinsi_id'=>2,'nama_kota'=>'Klaten'],
            ['propinsi_id'=>2,'nama_kota'=>'Magelang'],
            ['propinsi_id'=>3,'nama_kota'=>'Malang'],
            ['propinsi_id'=>3,'nama_kota'=>'Mojokerto']
        ]);
    }
}
