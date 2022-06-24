<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            ['nama_jurusan'=>'Informatika','jumlah_sks'=>150,'jenjang'=>'S1'],
            ['nama_jurusan'=>'Sistem Informasi','jumlah_sks'=>150,'jenjang'=>'S1'],
            ['nama_jurusan'=>'Teknologi Informasi','jumlah_sks'=>150,'jenjang'=>'S2'],
            ['nama_jurusan'=>'Sistem Informasi Akuntansi','jumlah_sks'=>120,'jenjang'=>'D3'],
            ['nama_jurusan'=>'Teknologi Komputer','jumlah_sks'=>120,'jenjang'=>'D3'],
            ['nama_jurusan'=>'Rekayasa Perangkat Lunak','jumlah_sks'=>120,'jenjang'=>'D3'],
        ]);

    }
}
