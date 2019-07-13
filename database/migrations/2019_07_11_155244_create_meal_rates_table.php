<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meal_rate_name');
            $table->integer('breakfast_rate');
            $table->text('breakfast_menu');
            $table->integer('lunch_rate');
            $table->text('lunch_menu');
            $table->integer('dinner_rate');
            $table->text('dinner_menu');
            $table->boolean('active');
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
        Schema::dropIfExists('meal_rates');
    }
}
