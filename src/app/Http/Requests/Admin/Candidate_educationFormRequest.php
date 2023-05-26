<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Candidate_educationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_educational_university' => 'required',
            'location_educational_university' => 'required',
            'institute' => 'required',
            'year_of_release' => 'required',
            'candidate_full_name_id' => 'required'
        ];
    }
}
