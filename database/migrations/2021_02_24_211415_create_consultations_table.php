<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('vet_id');
            $table->string('age');
            $table->decimal('weight', 7 , 3)->nullable();
            $table->decimal('temperature', 4, 2)->nullable();
            $table->enum('capillary_refill_time', ['Less than 1 second', '1-2 seconds', 'Longer than 2 seconds'])->nullable();
            $table->integer('heart_rate')->nullable();
            $table->enum('pulse', ['Strong and synchronous with each heart beat', 'Irregular', 'Bounding', 'Weak or absent'])->nullable();
            $table->integer('respiratory_rate')->nullable();
            $table->enum('reproductive_status', ['Pregnant', 'Lactating', 'Neither'])->nullable();
            $table->enum('consciousness', ['Alert and responsive', 'Depressed or obtunded', 'Stupor', 'Comatose'])->nullable();
            $table->enum('hydration', ['Normal', '0-5%', '6-7%', '8-9%', '+10%'])->nullable();
            $table->enum('pain', ['None', 'Vocalization', 'Changes in behavior', 'Physical changes'])->nullable();
            $table->enum('body_condition', ['Too thin', 'Ideal', 'Too heavy'])->nullable();
            $table->text('anamnesis');
            $table->text('observations');
            $table->text('problem_list');
            $table->text('master_list')->nullable();
            // Plan diagnóstico: qué analisis se deben hacer https://www.slideshare.net/faustopantoja9/ecop-labrador
            // https://cvo.org/CVO/media/College-of-Veterinarians-of-Ontario/Resources%20and%20Publications/Templates%20and%20Protocols/SampleCompanionAnimal.pdf
            $table->text('diagnosis');
            $table->enum('prognosis', ['Good', 'Fair', 'Guarded', 'Grave', 'Poor']);
            $table->text('treatment_plan')->nullable();
            $table->text('intructions_to_owner')->nullable();
            $table->enum('consult_status', ['Open', 'Closed'])->default('Closed');
            $table->timestamps();

            $table->foreign('pet_id')
                ->references('id')
                ->on('pets')
                ->onDelete('cascade');

            $table->foreign('vet_id')
                ->references('id')
                ->on('vets')
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
        Schema::dropIfExists('consultations');
    }
}
