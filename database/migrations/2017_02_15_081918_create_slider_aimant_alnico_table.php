<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderAimantAlnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('slider_aimant_alnico', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('aimant_alnico_id')->unsigned();
                $table->foreign('aimant_alnico_id')->references('id')->on('aimant_alnico');
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
        Schema::drop('slider_aimant_alnico');
    }
}
