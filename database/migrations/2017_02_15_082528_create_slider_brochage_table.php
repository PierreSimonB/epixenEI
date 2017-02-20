<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderBrochageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
{
    Schema::create('slider_brochage', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('brochage_id')->unsigned();
                $table->foreign('brochage_id')->references('id')->on('brochage');
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
        Schema::drop('slider_brochage');
    }
}
