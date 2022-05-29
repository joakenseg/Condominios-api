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
        Schema::create('reservas_espacios_comunes', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('residente_id')->unsigned();

            $table->bigInteger('espacio_comun_id')->unsigned();

            $table->timestamps();

            $table->foreign('residente_id')->references('id')->on('residentes')->onDelete("cascade");
            $table->foreign('espacio_comun_id')->references('id')->on('espacios_comunes')->onDelete("cascade");
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
    }
};
