<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapteurMagnetiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
{
    Schema::create('capteur_magnetique', function(Blueprint $table) {
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
        Schema::drop('capteur_magnetique');
    }
}
