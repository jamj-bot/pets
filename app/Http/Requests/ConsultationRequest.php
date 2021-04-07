<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'pet_id' => 'required|numeric',
            'age' => 'required',
            'weight' => 'nullable|numeric',
            'temperature' => 'nullable|numeric',
            'capillary_refill_time' => 'nullable|in:"Less than 1 second", "1-2 seconds", "Longer than 2 seconds"',
            'heart_rate' => 'nullable|numeric',
            'pulse' => 'nullable',
            'respiratory_rate' => 'nullable|numeric',
            'reproductive_status' => 'nullable|in:"Pregnant", "Lactating", "Neither"',
            'consciousness' => 'nullable|in:"Alert and responsive", "Depressed or obtunded", "Stupor", "Comatose"',
            'hydration' => 'nullable|in:"Normal", "0-5%", "6-7%", "8-9%", "+10%"',
            'pain' => 'nullable|in:"None", "Vocalization", "Changes in behavior", "Physical changes"',
            'body_condition' => 'nullable|in:"Too thin", "Ideal", "Too heavy"',
            'anamnesis' => 'required|max:60000',
            'observations' => 'required|max:60000',
            'problem_list' => 'required|max:60000',
            'master_list' => 'nullable|max:60000',
            'diagnosis' => 'required|max:60000',
            'prognosis' => 'required|in:"Good", "Fair", "Guarded", "Grave", "Poor"',
            'treatment_plan' => 'nullable|max:60000',
            'intructions_to_owner' => 'nullable|max:60000',
            'consult_status' => 'required|in:"Open", "Closed"',
            ];

        return $rules;
    }
}
