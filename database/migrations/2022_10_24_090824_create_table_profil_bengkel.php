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
        Schema::create('table_profil_bengkel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bengkel');
            $table->string('no_tlp_bengkel');
            $table->string('alamat_bengkel');
            $table->string('foto_bengkel');
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
        Schema::dropIfExists('table_profil_bengkel');
    }
};
