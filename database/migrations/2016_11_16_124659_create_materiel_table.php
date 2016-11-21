<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                           schema::create('materiel', function(Blueprint $table){
      $table->increments('id');
      $table->string('image', 255);
      $table->LongText('presentation', 255);
     
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
    Schema::drop('materiel');
    }
}
