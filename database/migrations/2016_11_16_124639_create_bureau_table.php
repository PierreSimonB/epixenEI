<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBureauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                          schema::create('bureau', function(Blueprint $table){
      $table->increments('id');
      $table->string('nom', 255);
      $table->string('prenom', 255);
       $table->string('statut', 255);
       $table->string('tel', 255);
       $table->string('email', 255);
       $table->string('adresse', 255);
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
       Schema::drop('bureau');
    }
}
