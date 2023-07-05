<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreParcelsRequest extends FormRequest
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
            'size' => ["required", Rule::in(['S', 'M', 'L', 'XL'])],
            'user_id' => ["required", "exists:users,id"],
        ];
    }

    public function messages()
    {
        return [
            "size.required" => "A(z) :attribute kitöltése kötelező.",
            "size.rule" => "A(z) :attribute csak 'S', 'M', 'L', 'XL' lehet.",
            "user_id.required" => "A(z) :attribute kitöltése kötelező.",
        ];
    }

    public function attributes()
    {
        return [
            "size" => "méret",
            "user_id" => "felhasználó_id",
        ];
    }
}
