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
        Schema::create('table_retur_beli_detail', function (Blueprint $table) {
            $table->increments('id_retur_beli_detail');
            $table->integer('id_retur_beli');
            $table->string('no_inv_retur');
            $table->string('id_barang');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('satuan');
            $table->float('qty_brg');
            $table->float('hrg_brg');
            $table->float('subtotal');
            $table->timestamps();
            $table->tinyInteger('gcrecord');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_retur_beli_detail');
    }
};
