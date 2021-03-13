<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'phone', 'email'];

    # One To Many
    public function pets()
    {
    	return $this->hasMany(Pet::class);
    }
}
