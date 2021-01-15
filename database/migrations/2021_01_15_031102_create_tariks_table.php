<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_transaksi');
            $table->string('alamat');
            $table->string('notelp');
            $table->string('nama_ortu');
            $table->string('saldo');
            $table->string('jumlah_tarik');
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
        Schema::dropIfExists('tariks');
    }
}
