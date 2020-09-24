<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CurrentBusinessName');
            $table->longText('description');
            $table->string('currency');
            $table->float('price_per_hr');
            $table->boolean('availability');
            $table->string('contactNo');
            $table->string('photo');
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
        Schema::dropIfExists('individual_services');
    }
}
