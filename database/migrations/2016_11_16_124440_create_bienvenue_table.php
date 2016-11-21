<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienvenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               schema::create('bienvenue', function(Blueprint $table){
      $table->increments('id');
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
           Schema::drop('bienvenue');
    }
}
