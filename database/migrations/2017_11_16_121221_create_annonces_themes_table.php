<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('annonces_themes', function (Blueprint $table){
           $table->integer('id_annonces')->unsigned();
           $table->integer('id_themes')->unsigned();
           $table->foreign('id_annonces')->references('id')->on('annonces');
           $table->foreign('id_themes')->references('id')->on('themes');
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
        Schema::dropIfExists('annonces_themes');
    }
}
