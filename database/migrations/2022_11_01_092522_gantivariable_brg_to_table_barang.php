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
            $table->integer('id_barang')->primary()->first()->change();
            $table->string('kode_barang')->unique()->after('id_barang')->change();
            $table->integer('gcRecord')->default(0)->after('harga_grosir')->change();
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
            //
            $table->dropColumn('kode_barang');
            $table->dropColumn('id_barang');
            $table->dropColumn('gcRecord');
        });
    }
};
