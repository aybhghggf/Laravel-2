<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Allow the request to be authorized (return true).
     */
    public function authorize(): bool
    {
        return true; // ✅ Must be true to allow validation
    }

    /**
     * Define the validation rules.
     */
    public function rules(): array
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:profiles,email', // ✅ Specify table and column
            'password' => 'required|min:6', 
            'image'=> 'required|mimes:jpg,jpeg,png,gif',
        ];
    }
}
