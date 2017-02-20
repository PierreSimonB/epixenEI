<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderArbreDenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
{
    Schema::create('slider_arbre_dente', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('arbre_dente_id')->unsigned();
                $table->foreign('arbre_dente_id')->references('id')->on('arbre_dente');
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
        Schema::drop('slider_arbre_dente');
    }
}
