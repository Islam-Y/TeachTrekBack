<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Candidate_infoFormRequest extends FormRequest
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
            'floor' => 'required',
            'profession' => 'required',
            'specialization' => 'required',
            'city_candidate' => 'required',
            'description' => 'required',
            'files_candidate_id' => 'required',
            'photo_id' => 'required',
            'candidate_full_name_id' => 'required',
        ];
    }
}
