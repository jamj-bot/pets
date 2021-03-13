<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

	# One To Many (Inverse) / Belongs To
    public function vet()
    {
        return $this->belongsTo(Vet::class);
    }

    # One To Many (Inverse) / Belongs To
    public function pet()
    {
    	return $this->belongsTo(Pet::class);
    }
}
