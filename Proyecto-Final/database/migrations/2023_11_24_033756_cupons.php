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
        Schema::create('cupons', function (Blueprint $table) {
            $table->id('idcupons');
            $table->string('cupons_code')->unique();
            $table->decimal('discount', 10, 2);
            $table->date('expiration_date');
            $table->unsignedBigInteger('reservations_idreservations');
            $table->foreign('reservations_idreservations')->references('idreservations')->on('reservations');
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
        Schema::dropIfExists('cupons');
    }
};
