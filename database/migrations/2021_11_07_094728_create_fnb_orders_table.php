<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFnbOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fnb_orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_book');
            $table->string('id_name');
            $table->string('id_category');
            $table->string('note');
            $table->string('qty');
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
        Schema::dropIfExists('fnb_orders');
    }
}
