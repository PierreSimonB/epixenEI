<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderMoteurElectriqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
          public function up()
{
    Schema::create('slider_moteur_electrique', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('moteur_electrique_id')->unsigned();
                $table->foreign('moteur_electrique_id')->references('id')->on('moteur_electrique');
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
        Schema::drop('slider_moteur_electrique');
    }
}
