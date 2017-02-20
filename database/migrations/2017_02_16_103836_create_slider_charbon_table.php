<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderCharbonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
{
    Schema::create('slider_charbon', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('charbon_id')->unsigned();
                $table->foreign('charbon_id')->references('id')->on('charbon');
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
        Schema::drop('slider_charbon');
    }
}
