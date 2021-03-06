<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();//;
/**/
            $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade')
              ->nullable();
/**/
            $table->integer('building_id')->unsigned()->index();//->index();
/**/
            $table->foreign('building_id')
              ->references('id')
              ->on('buildings')
              ->onDelete('cascade')
              ->nullable();
/**/

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
        Schema::dropIfExists('likes');
    }
}
