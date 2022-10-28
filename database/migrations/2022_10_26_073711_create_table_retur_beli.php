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
        Schema::create('table_retur_beli', function (Blueprint $table) {
            $table->increments('id_retur');
            $table->integer('id_supplier');
            $table->string('nama_supplier');
            $table->string('no_inv_retur');
            $table->date('tgl_inv_retur');
            $table->string('no_surat_jln');
            $table->date('tgl_surat_jln');
            $table->float('ppn');
            $table->float('total');
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
        Schema::dropIfExists('table_retur_beli');
    }
};
