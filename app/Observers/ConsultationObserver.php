<?php

namespace App\Observers;

use App\Models\Consultation;
use Illuminate\Support\Facades\Storage;

class ConsultationObserver
{
    /**
     * Handle the Consultation "deleted" event.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return void
     */
    public function deleting(Consultation $consultation)
    {
        if ($consultation->files) {
            foreach ($consultation->files as $file) {
                Storage::delete($file->url);
            }
        }
    }

}
