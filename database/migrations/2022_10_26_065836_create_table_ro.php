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
        Schema::create('table_ro', function (Blueprint $table) {
            $table->increments('id_ro');
            $table->string('no_ro');
            $table->date('tanggal_ro');
            $table->integer('id_supplier');
            $table->string('nama_supplier');
            $table->string('no_faktur');
            $table->date('tgl_faktur');
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
        Schema::dropIfExists('table_ro');
    }
};
