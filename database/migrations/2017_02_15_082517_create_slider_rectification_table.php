<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderRectificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
{
    Schema::create('slider_rectification', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('rectification_id')->unsigned();
                $table->foreign('rectification_id')->references('id')->on('rectification');
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
        Schema::drop('slider_rectification');
    }
}
