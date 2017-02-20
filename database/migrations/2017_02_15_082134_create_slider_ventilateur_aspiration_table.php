<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderVentilateurAspirationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('slider_ventilateur_aspiration', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('ventilateur_aspiration_id')->unsigned();
                $table->foreign('ventilateur_aspiration_id')->references('id')->on('ventilateur_aspiration');
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
        Schema::drop('slider_ventilateur_aspiration');
    }
}
