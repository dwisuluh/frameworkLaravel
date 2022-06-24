<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $primaryKey = 'id';
    protected $fillable = ['id','propinsi_id','nama_kota'];

    public function propinsi(){
        return $this->belongsTo(Propinsi::class);
    }
}
