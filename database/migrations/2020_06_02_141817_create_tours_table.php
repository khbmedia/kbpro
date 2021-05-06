<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('location');
            $table->text('overview');
            $table->unsignedBigInteger('des_id');
            $table->unsignedBigInteger('type_id');
            $table->bigInteger('amount_day');
            $table->bigInteger('amount_night');
            $table->text('video');
            $table->text('thumbnail');
            $table->foreign('des_id')->references('id')->on('destinations');
            $table->foreign('type_id')->references('id')->on('travel_type');
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
        Schema::dropIfExists('tours');
    }
}
