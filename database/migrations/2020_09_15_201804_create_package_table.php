<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_package', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->string('image',255);
            $table->enum('categorie',['restaurant','boutique','deplacement']);
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
        Schema::dropIfExists('tb_package');
    }
}
