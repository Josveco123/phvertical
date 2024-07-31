<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
        return
          [
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'beds' => 'required|integer|min:0',
            'baths' => 'required|integer|min:0',
            'sq_ft' => 'required|numeric|min:0',
            'year_built' => 'required|integer|min:1800|max:' . date('Y'),
            'price_sqft' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'home_type' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'more_info' => 'nullable|string',
            'agent_name' => 'required|string|max:255',
        ];
    }
}
