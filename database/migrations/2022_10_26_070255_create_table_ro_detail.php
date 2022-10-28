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
        Schema::create('table_ro_detail', function (Blueprint $table) {
            $table->increments('id_ro_detail');
            $table->integer('id_roheader');
            $table->string('no_ro');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('nama_Satuan');
            $table->float('qty_terima');
            $table->float('hg_bengkel');
            $table->float('hg_eceran');
            $table->float('hg_grosir');
            $table->float('hg_modal');
            $table->float('hg_bengkel_update');
            $table->float('hg_eceran_update');
            $table->float('hg_grosir_update');
            $table->float('hg_modal_update');
            $table->tinyInteger('gcrecord');                                                                                                                   ('grRecord');
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
        Schema::dropIfExists('table_ro_detail');
    }
};
