<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagegalerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                          schema::create('imagegalerie', function(Blueprint $table){
      $table->increments('id');
      $table->string('image', 255);
   $table->integer('gal_id')->unsigned();
            $table->foreign('gal_id')->references('id')->on('galerie')->onDelete('cascade');
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
       Schema::drop('imagegalerie');
    }
}
