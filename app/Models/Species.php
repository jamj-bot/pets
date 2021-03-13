<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $fillable = ['common_name', 'scientific_name'];

    # One To Many
    public function pets()
    {
    	return $this->hasMany(Pet::class);
    }
}
