<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('idhotels');
            $table->string('hotel_name');
            $table->string('address');
            $table->text('description');
            $table->unsignedBigInteger('room_idroom');
            $table->foreign('room_idroom')->references('idroom')->on('rooms');
            $table->unsignedBigInteger('calendar_idcalendar');
            $table->foreign('calendar_idcalendar')->references('idcalendar')->on('calendar');
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
        Schema::dropIfExists('hotels');
    }
};