<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('reservation_id');
            $table->integer('room_id');
            $table->integer('roomtype_id');
            $table->integer('num_customers');
            $table->integer('num_rooms');
            $table->string('room_no');
            $table->integer('room_price');
            $table->integer('total_amount');
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
        Schema::dropIfExists('reservation_details');
    }
}
