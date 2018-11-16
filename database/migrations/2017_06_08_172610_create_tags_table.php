<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('building_count')->unsigned()->default(0);
        });

        Schema::create('building_tag', function (Blueprint $table) {

            $table->integer('building_id')->unsigned()->index();
            $table->foreign('building_id')
              ->references('id')
              ->on('buildings')
              ->onDelete('cascade')
              ->nullable();
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')
              ->references('id')
              ->on('tags')
              ->onDelete('cascade')
              ->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('building_tag');
        Schema::dropIfExists('tags');
    }
}
