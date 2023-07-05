<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => ["required", "string", "max:255"],
            'last_name' => ["required", "string", "max:255"],
            'password' => ["required", "confirmed", "min:8", "string", "max:255"],
            'email_address' => ["required", "string", "max:255"],
            'phone_number' => ["string", "max:255"],
        ];
    }

    public function messages()
    {
        return [
            "first_name.required" => "A(z) :attribute kitöltése kötelező.",
            "first_name.max" => "A(z) :attribute legfeljebb 255 karakter lehet.",
            "last_name.required" => "A(z) :attribute kitöltése kötelező.",
            "last_name.max" => "A(z) :attribute legfeljebb 255 karakter lehet.",
            "email_address.required" => "A(z) :attribute kitöltése kötelező.",
            "email_address.max" => "A(z) :attribute legfeljebb 255 karakter lehet.",
            "password.required" => "A(z) :attribute kitöltése kötelező.",
            "password.min" => "A(z) :attribute legalább 8 karakter hosszú legyen.",
            "password.max" => "A(z) :attribute legfeljebb 255 karakter lehet.",
            "password.confirmed" => "A(z) :attribute nem egyezik.",
        ];
    }

    public function attributes()
    {
        return [
            "first_name" => "keresztnév",
            "last_name" => "vezetéknév",
            "email_address" => "email",
            "password" => "jelszó",
        ];
    }
}
