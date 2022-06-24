<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $filleble = [
        'nim', 'nama', 'alamat', 'tgl_lahir', 'agama',
        'jenis_kelamin', 'jurusan_id'
    ];

    public function ag($kode){
        if($kode == 1) return 'Islam';
        else if ($kode==2) return 'Protestan';
        else if ($kode==3) return 'Khatolik';
        else if ($kode==2) return 'Hindu';
        else if ($kode==2) return 'Budha';
        else return "Lainnya";
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
