<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
{
    Schema::create('slider_connection', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('connection_id')->unsigned();
                $table->foreign('connection_id')->references('id')->on('connection');
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
        Schema::drop('slider_connection');
    }
}
