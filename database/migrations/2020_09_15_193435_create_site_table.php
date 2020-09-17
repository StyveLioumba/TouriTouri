<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_site', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->text('description');
            $table->string('image',255);
            $table->string('rating',50);
            $table->foreignId('departement_id')->constrained('tb_departement')->onDelete('cascade');
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
        Schema::dropIfExists('tb_site');
    }
}
