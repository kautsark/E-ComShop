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
        Schema::create('table_penjualan', function (Blueprint $table) {
            $table->increments('id_penjualan');
            $table->string('kode-penjualan');
            $table->float('total_item');
            $table->float('total_harga');
            $table->float('total_diskon');
            $table->float('total_diterima');
            $table->string('username');
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
        Schema::dropIfExists('table_penjualan');
    }
};
