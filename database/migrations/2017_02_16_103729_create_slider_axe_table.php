<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderAxeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
{
    Schema::create('slider_axe', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('axe_id')->unsigned();
                $table->foreign('axe_id')->references('id')->on('axe');
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
        Schema::drop('slider_axe');
    }
}
