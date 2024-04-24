<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseRequest extends FormRequest
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
            'ville' => ['required', 'min:2', 'max:40', 'regex:/^[A-Z][a-zA-Z ]+$/'],
            'type' => ['required'],
            'prix' => ['required', 'numeric', 'min:400000', 'max:1000000', 'regex:/^[0-9]+$/'],
            'description' => ['required', 'min:20'],
            'image' => ['image', 'nullable', 'max:2000']
        ];
    }
}
