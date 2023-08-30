<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'brand' => 'required',
            'model' => 'required',
            'year_of_manufacture' => 'required',
            'transmission' => 'required',
            'mileage' => 'required',
            'door' => 'required',
            'brake' => 'required',
            'engine' => 'required',
            'passengers' => 'required',
            'baggage' => 'required',
            'color' => 'required',
            'type_of_fuel' => 'required',
            'price_by_day' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',

        ];
    }
}
