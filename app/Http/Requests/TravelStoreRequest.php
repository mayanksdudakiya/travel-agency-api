<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'            => ['required', 'max:255'],
            'description'     => ['required', 'min:10', 'max:65535'],
            'number_of_days'  => ['required', 'numeric', 'gt:0'],
            'is_public'       => ['boolean'],
            'created_by'      => ['exists:App\Models\User,id'],
        ];
    }
}
