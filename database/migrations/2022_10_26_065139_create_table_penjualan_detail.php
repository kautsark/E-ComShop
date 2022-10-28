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
        Schema::create('table_penjualan_detail', function (Blueprint $table) {
            $table->increments('id_penjualan_detail');
            $table->integer('id_penjualan');
            $table->integer('no_urut');
            $table->integer('id_barang');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('satuan');
            $table->float('qty_barang');
            $table->float('hrg_barang');
            $table->float('disc_persen');
            $table->float('disc_rp');
            $table->float('subtotal');
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
        Schema::dropIfExists('table_penjualan_detail');
    }
};
