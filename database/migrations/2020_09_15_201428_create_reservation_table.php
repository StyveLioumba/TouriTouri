<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_reservation', function (Blueprint $table) {
            $table->id();
            $table->integer('nbre_place');
            $table->date('dates');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('site_id')->constrained('tb_site');
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
        Schema::dropIfExists('tb_reservation');
    }
}
