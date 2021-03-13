<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id', 'species_id', 'chip', 'name', 'breed', 'sex', 'dob', 'neutered', 'diseases', 'allergies', 'status'];

    # One To Many
    public function consultations()
    {
        return $this->hasMany(Cosultation::class);
    }

    # One To Many (Inverse) / Belongs To
    public function owner()
    {
    	return $this->belongsTo(Owner::class);
    }

    # One To Many
    public function species()
    {
        return $this->belongsTo(Species::class);
    }

    # Get the pet's image.
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
