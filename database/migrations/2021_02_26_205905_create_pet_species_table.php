<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_species', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('species_id');

            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
            $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');
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
        Schema::dropIfExists('pet_species');
    }
}
