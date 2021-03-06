<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderAimantFerriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('slider_aimant_ferrite', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('aimant_ferrite_id')->unsigned();
                $table->foreign('aimant_ferrite_id')->references('id')->on('aimant_ferrite');
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
        Schema::drop('slider_rotor');
    }
}
