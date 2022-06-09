<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required|max:255',
            'email' => 'required|array|min:1',
            'email.*' => 'required|email|distinct|unique:email,email',
            'phone' => 'nullable|array',
            'phone.*' => 'nullable|string|distinct|digits:13|unique:phone,phone',
            'image' => 'nullable|image',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'zip' => 'nullable|integer',
            'mailing_address' => 'nullable|string',
            'mailing_city' => 'nullable|string',
            'mailing_zip' => 'nullable|integer',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'full_name.required' => 'Full name is required',
            'email.required' => 'Email is required',
            'email.*.distinct' => 'Email addresses must be different.',
            'email.*.unique' => 'Email has already been taken.',
            'phone.*.digits' => 'Phone must be 13 digits.',
            'zip.integer' => 'ZIP must be number.',
            'mailing_zip.integer' => 'Mailing ZIP must be number.'
        ];
    }
}
