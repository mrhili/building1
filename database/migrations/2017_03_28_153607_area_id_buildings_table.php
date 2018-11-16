<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AreaIdBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buildings', function (Blueprint $table) {
            //

              
            $table->integer('area_id')->nullable()->unsigned();
            $table->foreign('area_id')
              ->references('id')
              ->on('areas')
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
        Schema::table('buildings', function (Blueprint $table) {
            //
            $table->dropForeign(['area_id']);
        });
    }
}
