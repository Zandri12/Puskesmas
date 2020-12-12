<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateK4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k4s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_nagari');
            $table->string('nama_jorong');
            $table->string('bulan');
            $table->string('token')->nullable();
            $table->string('na_ibu');
            $table->string('umur');
            $table->string('alamat');
            $table->string('na_suami');
            $table->string('tglk4');
            $table->string('masalah');
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
        Schema::dropIfExists('k4s');
    }
}
