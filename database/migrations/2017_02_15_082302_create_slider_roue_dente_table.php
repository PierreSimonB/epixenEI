<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderRoueDenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('slider_roue_dente', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('roue_dente_id')->unsigned();
                $table->foreign('roue_dente_id')->references('id')->on('roue_dente');
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
       Schema::drop('slider_roue_dente');
    }
}
