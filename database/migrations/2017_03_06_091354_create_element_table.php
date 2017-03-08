<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('title_element');
            //$table->unsignedInteger('type_element');
            $table->string('path_file');
            $table->string('url');
            //$table->foreign('slide_id')->references('id_slide')->on('slide');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
