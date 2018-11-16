<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->integer('price');
            $table->tinyInteger('status');
            $table->tinyInteger('state');
            $table->tinyInteger('rent');
            $table->integer('square');
            $table->tinyInteger('type');
            $table->text('roomNumber')->nullable();
            $table->bigInteger('lang')->nullable();
            $table->bigInteger('lat')->nullable();
            $table->text('largDisc');
            $table->tinyInteger('kind');
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
        //
        Schema::dropIfExists('buildings');
    }
}
