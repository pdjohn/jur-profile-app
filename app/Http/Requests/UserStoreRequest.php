<?php

namespace App\Http\Requests;

use App\Rules\MaxWordsRule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        return [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',

            'company_name' => 'required|min:3',
            'role' => 'required|min:3',
            'job_start_date'=> 'required|date',
            'job_end_date' => 'required_without:current_job',
            'current_job' => 'required_without:job_end_date',
            'company_description' => ['required', new MaxWordsRule(300)],

            'organization_name' => 'required|min:3',
            'associated_as' => 'required|min:3',
            'organization_start_date' => 'required|date',
            'organization_end_date' => 'required_without:current_organization',
            'current_organization' => 'required_without:organization_at_present',
            'organization_description' => ['required', new MaxWordsRule(100)],
        ];
    }
}
