<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateK1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_nagari');
            $table->string('nama_jorong');
            $table->string('bulan');
            $table->string('token')->nullable();
            $table->string('na_ibu');
            $table->string('umur');
            $table->string('alamat');
            $table->string('na_suami');
            $table->string('hamil_ke');
            $table->string('HPHT');
            $table->string('usia_kehamilan');
            $table->string('jr');
            $table->string('DPT');
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
        Schema::dropIfExists('k1s');
    }
}
