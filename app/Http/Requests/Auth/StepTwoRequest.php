<?php

namespace App\Http\Requests\Auth;

use App\Rules\CanadianPostalCode;
use Illuminate\Foundation\Http\FormRequest;

class StepTwoRequest extends FormRequest
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
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:companies',
            'zip_code' => ['required', new CanadianPostalCode],
            'password' => 'required',
            'remember_me' => 'nullable'
        ];
    }
}
