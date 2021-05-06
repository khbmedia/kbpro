<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geusts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('country');
            $table->string('passport');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('email');
            $table->text('address');
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
        Schema::dropIfExists('geusts');
    }
}
