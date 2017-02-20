<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderDentureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
{
    Schema::create('slider_denture', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('denture_id')->unsigned();
                $table->foreign('denture_id')->references('id')->on('denture');
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
        Schema::drop('slider_denture');
    }
}
