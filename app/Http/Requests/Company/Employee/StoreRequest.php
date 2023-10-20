<?php

namespace App\Http\Requests\Company\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'company_id' => [
                'required',
                new Exists('companies', 'id'),
            ],

            'file' => [
                'required',
                'file',
                'mimes:csv',
            ],
        ];
    }
}
