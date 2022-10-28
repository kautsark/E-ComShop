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
        Schema::create('table_retur_jual', function (Blueprint $table) {
            $table->increments('id_retur_jual');
            $table->string('no_inv_jual');
            $table->date('tgl_inv_jual');
            $table->integer('id_supplier');
            $table->string('nama_supplier');
            $table->float('subtotal');
            $table->float('jml_disc_rp');
            $table->float('total');
            $table->timestamps();
            $table->tinyInteger('gcRecord');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_retur_jual');
    }
};
