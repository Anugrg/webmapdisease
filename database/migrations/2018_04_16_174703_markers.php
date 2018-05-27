<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Markers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //columns for lat and long values
        Schema::create('markers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('disease');
            $table->float('lat',9,5);
            $table->float('long',9,5);
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
          Schema::dropIfExists('markers');
    }
}
