<?php

namespace App\Models;

use App\Models\SegiEmpat;

//membuat kelas Balok turunan dari kelas segiempat

class Balok extends SegiEmpat
{
    public $tebal; //properti

    //method menghitung volume

    public function volume()
    {
        return $this->tebal * $this->luas();
    }
}
