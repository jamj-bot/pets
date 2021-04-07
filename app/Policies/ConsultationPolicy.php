<?php

namespace App\Policies;

use App\Models\Consultation;
use App\Models\User;
use App\Models\Vet;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConsultationPolicy
{
    use HandlesAuthorization;


    public function vet(User $user, Consultation $consultation)
    {
        $vet = Vet::where('email', '=', $user->email)->firstOrFail();

        if () {

        }

    }
}
