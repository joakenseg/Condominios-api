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
        Schema::create('espacios_comunes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreEspacioComun');

            $table->bigInteger('condominio_id')->unsigned();

            $table->timestamps();

            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete("cascade");
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
