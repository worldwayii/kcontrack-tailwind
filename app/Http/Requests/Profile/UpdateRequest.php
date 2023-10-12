<?php

namespace App\Http\Requests\Profile;

use App\Rules\CanadianPostalCode;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => [
                'required',
                Rule::unique('companies')->ignore(Auth::user()->company),
            ],
            'zip_code' => ['required', new CanadianPostalCode],
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'logo' => 'file|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
