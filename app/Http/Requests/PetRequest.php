<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
        $pet = $this->route()->parameter('pet');

        $rules = [
            'owner_id' => 'required|numeric',
            'species_id' => 'required|numeric',
            'chip' => 'required|numeric|min:0|max:9999999999|unique:pets',
            'name' => 'required|max:100',
            'breed' => 'nullable|max:100',
            'sex' => 'required|in:"male","female","unknown"',
            'dob' => 'required|date',
            'neutered' => 'required|in:"yes","no","unknown"',
            'diseases' => 'nullable|max:60000',
            'allergies' => 'nullable|max:6000',
            'status' => 'required|in:"dead","alive"',
            'file' => 'image'
        ];

        if($pet){
            $rules['chip'] = 'required|unique:pets,chip,' . $pet->id;
        }

        // if($this->status == 2) {
        //     $rules = array_merge($rules, [
        //         'category_id' => 'required',
        //         'tags' => 'required',
        //         'extract' => 'required',
        //         'body' => 'required',
        //     ]);
        // }

        return $rules;
    }
}
