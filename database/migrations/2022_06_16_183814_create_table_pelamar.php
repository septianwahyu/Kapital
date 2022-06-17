<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pelamar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('nohp');
            $table->string('departemen');
            $table->string('k1_pengalaman');
            $table->string('k2_pendidikan');
            $table->string('k3_psikologi');
            $table->string('k4_keahlian');
            $table->string('k5_umur');
            $table->string('k6_toefl');
            $table->string('k7_ipk');
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
        Schema::dropIfExists('table_pelamar');
    }
}
