<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'          => ['required', 'max:255'],
            'starting_date' => ['required', 'date'],
            'ending_date'   => ['required', 'date', 'after:starting_date'],
            'price'         => ['required', 'numeric'],
        ];
    }
}
