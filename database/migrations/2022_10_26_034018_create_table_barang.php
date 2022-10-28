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
        Schema::create('table_barang', function (Blueprint $table) {
            $table->integer('id_barang');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('id_merk_barang');
            $table->string('nama_satuan');
            $table->string('jenis_motor');
            $table->float('harga_modal');
            $table->float('harga_bengkel');
            $table->float('harga_eceran');
            $table->float('harga_grosir');
            $table->tinyInteger('gcRecord');
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
        Schema::dropIfExists('table_barang');
    }
};
