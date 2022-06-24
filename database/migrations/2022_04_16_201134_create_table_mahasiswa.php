<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim',11)->unique();
            $table->string('nama',100);
            $table->text('alamat')->nullable();
            $table->enum('jenis_kelamin',['L','P']);
            $table->date('tgl_lahir');
            $table->enum('agama',['1','2','3','4','5','6','7']);
            $table->integer('jurusan_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
