<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderVisSansFinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('slider_vis_sans_fin', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('vis_sans_fin_id')->unsigned();
                $table->foreign('vis_sans_fin_id')->references('id')->on('vis_sans_fin');
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
        Schema::drop('slider_vis_sans_fin');
    }
}
