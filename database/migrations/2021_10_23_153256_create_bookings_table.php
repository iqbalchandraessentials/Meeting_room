<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
        $table->string('date');
        $table->string('time');
        $table->string('id_room');
        $table->string('pic_name');
        $table->string('pic_email');
        $table->string('pic_phone');
        $table->string('status')->nullable();
        $table->longText('description');
        $table->longText('fnb')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
