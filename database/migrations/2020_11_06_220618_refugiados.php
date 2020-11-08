<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Refugiados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugiados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre')->nullable();
        $table->string('identidad')->nullable();
        $table->string('edad')->nullable();
        $table->string('telefono')->nullable();
        $table->string('refugio')->nullable();
        $table->unsignedBigInteger('departamentos_id')->nullable();
        $table->foreign('departamentos_id')->references('id')->on('departamentos');
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
        //
        Schema::drop('refugiados');
    }
}
