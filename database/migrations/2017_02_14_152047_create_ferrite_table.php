<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFerriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
{
    Schema::create('ferrite', function(Blueprint $table) {
		$table->increments('id');
		$table->longText('presentation');
                $table->longText('texte_preparation');
                $table->string('mot_cle');
                $table->string('image',255);
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
         Schema::drop('ferrite');
    }
}
