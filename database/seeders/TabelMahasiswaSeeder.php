<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['nim'=>'195411132','nama'=>'DWI SULUH PRIBADI','alamat'=>'Yogyakarta','jenis_kelamin'=>'L','tgl_lahir'=>'1985-03-15','agama'=>1,'jurusan_id'=>1],
            ['nim'=>'193110001','nama'=>'MIFTAKHUL ERVYANTI SANTOSA','alamat'=>'Malang','jenis_kelamin'=>'P','tgl_lahir'=>'1999-01-06','agama'=>1,'jurusan_id'=>6],
            ['nim'=>'155610094','nama'=>'SIDONIUS ZEBUA','alamat'=>'Bima','jenis_kelamin'=>'L','tgl_lahir'=>'1998-01-24','agama'=>2,'jurusan_id'=>2],
            ['nim'=>'193310019','nama'=>'IVAN GREGORIUS TONDA','alamat'=>'Maluku','jenis_kelamin'=>'L','tgl_lahir'=>'1997-02-08','agama'=>3,'jurusan_id'=>5],
            ['nim'=>'193210005','nama'=>'GUSTI AYU PUTU LAKSITA GAYATRI','alamat'=>'Ternate','jenis_kelamin'=>'P','tgl_lahir'=>'2000-03-06','agama'=>4,'jurusan_id'=>4],
        ]);
    }
}
