<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('panggilan');
            $table->date('ttd');
            $table->integer('telp')->unique();
            $table->integer('no_identitas')->unique();
            $table->string('alamat_ktp');
            $table->integer('kode_pos');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('alamat_tinggal');
            $table->integer('pos_tinggal');
            $table->string('kecamatan_tinggal');
            $table->string('kota_tinggal');
            $table->string('provinsi_tinggal');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('tiktok');
            $table->integer('nomor_ujian')->unique();
            $table->string('prodi1');
            $table->string('kampus1');
            $table->string('prodi2');
            $table->string('kampus2');
            $table->string('prodi3');
            $table->string('kampus3');
            $table->string('jenis_kelamin');
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
        Schema::dropIfExists('data');
    }
}
