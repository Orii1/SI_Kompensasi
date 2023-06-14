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
        Schema::create('kompensasi', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('kd_ruangan');
            $table->string('kd_kelas');
            $table->string('kd_ruangan');
            $table->foto();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompensasi');
    }
};
