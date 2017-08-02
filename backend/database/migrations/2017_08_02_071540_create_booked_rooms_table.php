<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookedRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_rooms', function (Blueprint $table) {
            $table->increments('bookedrooms_id');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('room_id')->on('master_kamars');
            $table->integer('bookings_id')->unsigned();
            $table->foreign('bookings_id')->references('bookings_id')->on('bookings');
            $table->string('room_number');
            $table->date('check_in');
            $table->date('check_out');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booked_rooms');
    }
}
