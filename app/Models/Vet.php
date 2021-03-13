<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'phone', 'email'];

    # One To Many
    public function consultations()
    {
        return $this->hasMany(Cosultation::class);
    }

}
