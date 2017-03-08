<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('title_slide');
            //$table->foreign('type_slide')->references('id_type_slide')->on('type_slide');
            $table->string('description');
            //$table->foreign('presentation_id')->references('id_pres')->on('presentation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
