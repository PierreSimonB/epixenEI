<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderMoteurAimantPermanentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
         public function up()
{
    Schema::create('slider_moteuraimantperm', function(Blueprint $table) {
		$table->increments('id');
		$table->string('titre');
                $table->string('image');
                $table->integer('moteur_aimantperm_id')->unsigned();
                $table->foreign('moteur_aimantperm_id')->references('id')->on('moteur_aimantperm');
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
         Schema::drop('slider_moteuraimantperm');
    }
}
