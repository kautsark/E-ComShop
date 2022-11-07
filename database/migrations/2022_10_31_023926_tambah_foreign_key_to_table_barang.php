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
        Schema::table('table_barang', function (Blueprint $table) {
            //
            $table->unsignedInteger('id_merk_barang')->change();
            $table->foreign('id_merk_barang')
                ->references('id_merk')
                ->on('table_merk_barang')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_barang', function (Blueprint $table) {
            $table->integer('id_merk_barang')->change();
            $table->dropForeign('table_barang_id_merk_barang_foreign');
        });
    }
};
