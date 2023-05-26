<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationFormRequest extends FormRequest
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
            'name' => 'required', 'type' => 'required',
            'employer_id' => 'required', 'city_organization' => 'required',
            'vacancy_id' => 'required', 'photo_id' => 'required',
            'number_employees' => 'required', 'number_students' => 'required',
            'description' => 'required', 'description_mini' => 'required',
            'file_organization_id' => 'required',
        ];
    }
}
