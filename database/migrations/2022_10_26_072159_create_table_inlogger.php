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
        Schema::create('table_inlogger', function (Blueprint $table) {
            $table->increments('id_logger');
            $table->string('no_faktur');
            $table->integer('nourut');
            $table->integer('id_barang');
            $table->string('kode_barang');
            $table->date('tgl_inlogger');
            $table->integer('id_transaksi');
            $table->float('qty');
            $table->string('satuan');
            $table->string('contact');
            $table->integer('dari');
            $table->integer('tujuan');
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
        Schema::dropIfExists('table_inlogger');
    }
};
