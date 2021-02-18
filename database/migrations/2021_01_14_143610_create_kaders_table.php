<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaders', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('angkatan');
            $table->string('program_studi');
            $table->string('semester');
            $table->string('kelas');
            $table->string('tempat_tanggal_lahir');
            $table->text('alamat_asal');
            $table->text('alamat_sekarang');
            $table->bigInteger('murobi_id')->unsigned();
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
        Schema::dropIfExists('kaders');
    }
}
