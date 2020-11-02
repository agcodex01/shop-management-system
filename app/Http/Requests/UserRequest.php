<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'type' => 'sometimes|string',
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users,'. $this->user()->id ,
            'password' => 'sometimes|string|min:8|confirmed',
            'currentPassword' => 'sometimes|string',
            'company' => 'sometimes|string',
            'contact_number' => 'required|string',
            'image_url' => 'sometimes|max:255',
            'address' => 'required|string',
        ];
    }

}
