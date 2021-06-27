<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Brand');
            $table->string('Model');
            $table->float('Price');
            $table->string('Fuel_type');
            $table->integer('Fuel_tank_capacity');
            $table->integer('Max_speed');
            $table->string('Color');
            $table->string('Description');
            $table->unsignedBigInteger('category_id');

            $table->string('main_image');
            $table->string('thumb_image');
            $table->string('list_image');
            $table->string('slug');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('cars');
    }
}
