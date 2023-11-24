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
        Schema::create('calendar', function (Blueprint $table) {
            $table->id('idcalendar');
            $table->date('date');
            $table->integer('available_room');
            $table->decimal('rates', 10, 2);
            $table->unsignedBigInteger('rates_id')->nullable();
            $table->foreign('rates_id')->references('idrates')->on('rates');
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
        Schema::dropIfExists('calendar');
    }
};
