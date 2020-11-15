<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rukun_tetangga')->nullable();
            $table->string('rukun_warga')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('nama_desa')->nullable();
            $table->string('nama_kecamatan')->nullable();
            $table->string('nama_kabupaten')->nullable();
            $table->string('nama_provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('nomor_induk_pegawai')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('mengangkat')->nullable();
            $table->string('tmt_jabatan')->nullable();
            $table->string('tmt_sk_pangkat')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('diklat_kepemimpinan')->nullable();
            $table->string('asal_slta')->nullable();
            $table->string('jurusan_slta')->nullable();
            $table->string('tanggal_tamat_slta')->nullable();
            $table->string('universitas')->nullable();
            $table->string('jurusan_universitas')->nullable();
            $table->string('tanggal_tamat_universitas')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('golongan')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('role')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
