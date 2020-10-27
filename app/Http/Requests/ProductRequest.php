<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
            'colors' => 'required|array',
            'sizes' => 'required|array',
            'price' => 'required|integer',
            'stocks' => 'required|integer',
            'description' => 'required|string|max:255'
        ];
    }
}
