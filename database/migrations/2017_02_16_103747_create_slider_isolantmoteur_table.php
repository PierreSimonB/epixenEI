<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderIsolantmoteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
{
    Schema::create('slider_isolantmoteur', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('isolantmoteur_id')->unsigned();
                $table->foreign('isolantmoteur_id')->references('id')->on('isolantmoteur');
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
        Schema::drop('slider_isolantmoteur');
    }
}


