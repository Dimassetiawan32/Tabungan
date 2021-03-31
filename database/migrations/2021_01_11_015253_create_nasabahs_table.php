<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasabahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_nasabah')->unique();
            $table->string('norek')->unique();
            $table->string('nama');
            $table->unsignedInteger('kelas_id');
            $table->string('alamat');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('telp');
            $table->string('nama_ortu');
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
        Schema::dropIfExists('nasabahs');
    }
}
