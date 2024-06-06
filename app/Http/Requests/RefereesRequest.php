<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefereesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $licenses = ['jc123456', 'jc654321', 'jc202408'];
        return [
            'fullName' => 'required',
            'licenseNum' => [
                'required',
                'unique:referees',
                function ($attribute, $value, $fail) use ($licenses) {
                    $value = strtolower($value); // Convert $value to lowercase
                    if (!in_array($value, $licenses)) {
                        $fail("The $attribute must match one of the allowed license numbers.");
                    }
                }
            ],
            // 'licenseNum' => 'required|unique:referees',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'photo' => 'nullable|image|mimes:png,jpg,svg,jpeg|max:10240'
        ];
    }
}
