<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Candidate_experienceFormRequest extends FormRequest
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
            'name_old_company' => 'required',
            'position_old_company' => 'required',
            'location_old_company' => 'required',
            'start_work' => 'required',
            'end_work' => 'required',
            'candidate_full_name_id' => 'required'
        ];
    }
}
