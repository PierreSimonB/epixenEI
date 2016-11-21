<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                schema::create('contact', function(Blueprint $table){
      $table->increments('id');
      $table->string('nom', 255);
      $table->string('adresse', 255);
      $table->string('cp', 5);
      $table->string('ville', 255);
      $table->string('email', 255);
      $table->string('numtel', 255);
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
       Schema::drop('contact');
    }
}
