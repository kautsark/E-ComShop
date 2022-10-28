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
        Schema::create('table_retur_jual_detail', function (Blueprint $table) {
            $table->increments('id_retur_jual_detail');
            $table->integer('id_retur_jual');
            $table->string('no_inv_jual');
            $table->integer('no_urut');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('satuan');
            $table->float('qty');
            $table->float('hrg_brg');
            $table->float('disc_prs');
            $table->float('disc_rp');
            $table->float('jml_hrg');
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
        Schema::dropIfExists('table_retur_jual_detail');
    }
};
