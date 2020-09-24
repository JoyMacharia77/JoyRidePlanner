<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('continent');
            $table->string('country');
            $table->string('city');
            $table->string('place');
            $table->string('estimatedP');
            $table->string('currency');
            $table->string('category');
            $table->string('description');
            $table->string('picture');
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
        Schema::dropIfExists('_destinations');
    }
}
