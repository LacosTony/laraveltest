<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slides',function(Blueprint $table){
            $table->integer('type_slide')->unsigned();
            $table->integer('presentation_id')->unsigned();
            $table->foreign('type_slide')->references('id')->on('type_slides');
            $table->foreign('presentation_id')->references('id')->on('presentations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slides',function(Blueprint $table){
            $table->dropColumn('type_slide');
            $table->dropColumn('presentation_id');
        });
    }
}
