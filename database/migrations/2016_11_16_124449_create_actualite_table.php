<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           schema::create('actualite', function(Blueprint $table){
      $table->increments('id');
      $table->LongText('actu', 255);
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
         Schema::drop('actualite');
    }
}
