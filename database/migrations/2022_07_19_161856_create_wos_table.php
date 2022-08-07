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
        Schema::create('wos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wo', 191)->nullable();
            $table->string('nama_ig', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->integer('no_hp')->nullable();
            $table->longText('deskripsi', 191)->nullable();
            $table->string('image')->nullable();
            $table->float('rating')->nullable();
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
        Schema::dropIfExists('wos');
    }
};
