<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderMoteurUniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
{
    Schema::create('slider_moteur_uni', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('moteur_uni_id')->unsigned();
                $table->foreign('moteur_uni_id')->references('id')->on('moteur_uni');
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
        Schema::drop('slider_moteur_uni');
    }
}
