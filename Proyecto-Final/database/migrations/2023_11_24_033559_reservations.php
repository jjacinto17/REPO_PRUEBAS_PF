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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('idreservations');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('status');
            $table->decimal('total_price', 10, 2);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('idclients')->on('clients');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('idroom')->on('rooms');
            $table->unsignedBigInteger('hotels_idhotels');
            $table->foreign('hotels_idhotels')->references('idhotels')->on('hotels');
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
        Schema::dropIfExists('reservations');
    }
};

