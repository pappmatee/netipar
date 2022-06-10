<?php

namespace App\Http\Requests;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
        $id = request('id');
        return [
            'full_name' => 'required|max:255',
            'email' => 'required|array|min:1',
            "email.*' => 'required|email|distinct|unique:email,email,$id,contact_id",
            'phone' => 'nullable|array',
            'phone.*' => "nullable|string|distinct|digits:13|unique:phone,phone,$id,contact_id",
            'image' => 'nullable|image',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'zip' => 'nullable|integer',
            'mailing_address' => 'nullable|string',
            'mailing_city' => 'nullable|string',
            'mailing_zip' => 'nullable|integer',
        ];
    }
}
