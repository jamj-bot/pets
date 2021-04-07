<?php

namespace App\Observers;

use App\Models\Owner;
use App\Models\Pet;
use Illuminate\Support\Facades\Storage;

class PetObserver
{
    /**
     * Handle the Pet "created" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    // public function creating(Pet $pet)
    // {

    // }


    /**
     * Handle the Pet "deleted" event.
     *
     * @param  \App\Models\Pet  $pet
     * @return void
     */
    public function deleting(Pet $pet)
    {
        if ($pet->image) {
            Storage::delete($pet->image->url);
        }
    }
}
