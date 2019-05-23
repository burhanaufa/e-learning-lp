<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswas_id')->nullable();
            $table->unsignedBigInteger('jawabans_id')->nullable();
            
            $table->string('isi_jawaban_siswa');
            $table->timestamps();
            $table->foreign('siswas_id')->references('id')->on('siswas');
            $table->foreign('jawabans_id')->references('id')->on('jawabans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_jawaban');
    }
}
