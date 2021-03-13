<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('species_id');
            $table->string('chip')->unique();
            $table->string('name')->nullable();
            $table->string('breed')->nullable();
            $table->enum('sex', ['male', 'female', 'unknown']);
            $table->date('dob')->nullable();
            $table->enum('neutered', ['yes', 'no', 'unknown']);
            $table->text('diseases')->nullable();
            $table->text('allergies')->nullable();
            $table->enum('status', ['alive', 'dead'])->default('alive');
            $table->timestamps();

            $table->foreign('owner_id')
                ->references('id')
                ->on('owners')
                ->onDelete('cascade');

            $table->foreign('species_id')
                ->references('id')
                ->on('species')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
