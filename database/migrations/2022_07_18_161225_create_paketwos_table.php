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
        Schema::create('paketwos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket', 191)->nullable();
            $table->integer('harga')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->string('lokasi', 191)->nullable();
            $table->string('catering', 191)->nullable();
            $table->string('mua', 191)->nullable();
            $table->string('dekorasi', 191)->nullable();
            $table->string('mc', 191)->nullable();
            $table->string('entertain', 191)->nullable();
            $table->longText('deskripsi', 191)->nullable();
            $table->foreignId('wo_id')->nullable();
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
        Schema::dropIfExists('paketwos');
    }
};
