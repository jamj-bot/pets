<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['consultation_id', 'pet_id', 'file_name', 'url', 'extension'];
    /**
     * Get the consultation that owns the file.
    */
    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    /**
     * Get the pet that owns the file.
    */
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
