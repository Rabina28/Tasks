<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
                'firstname' => 'required|min:2|max:100',
                'lastname' => 'required|min:2|max:100',
                'dob' => 'required',
                'c_address' => 'required|min:2|max:100',
                'p_address' => 'required|min:2|max:100',
                'gender' => 'required',
                'f_name' => 'required|min:2|max:100',
                'f_number' => 'required|digits:10',
                'f_email' => 'required|email|',
                'f_occupation' => 'required|min:2|max:100',
                'm_name' => 'required|min:2|max:100',
                'm_number' => 'nullable|digits:10',
                'm_email' => 'required|email',
                'm_occupation' => 'required|min:2|max:100',
                'l_name' => 'nullable|min:2|max:100',
                'l_number' => 'nullable|digits:10',
                'relation' => 'nullable',
                'l_email' => 'nullable|email',
                'l_occupation' => 'nullable|min:2|max:100',
                'grade' => 'required',
                'last_school' => 'required',
                'bus_needed' => 'nullable',
                'pickup_address' => 'nullable|min:2|max:100'


        ];
    }
}
