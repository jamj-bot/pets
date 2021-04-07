<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = ['pet_id', 'vet_id', 'age', 'weight', 'temperature', 'capillary_refill_time', 'heart_rate', 'pulse', 'respiratory_rate', 'reproductive_status', 'consciousness', 'hydration', 'pain', 'body_condition', 'anamnesis', 'observations', 'problem_list', 'master_list', 'diagnosis', 'prognosis', 'treatment_plan', 'intructions_to_owner', 'consult_status'];


    /**
     * Get the vet that owns the consultation.
    */
    public function vet()
    {
        return $this->belongsTo(Vet::class);
    }

    /**
     * Get the pet that owns the consultation.
    */
    public function pet()
    {
    	return $this->belongsTo(Pet::class);
    }

    /**
     * Get the tests for the consultation.
    */
    public function tests()
    {
        return $this->belongsToMany(Test::class);
    }

    /**
     * Get the files for the consultation.
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
