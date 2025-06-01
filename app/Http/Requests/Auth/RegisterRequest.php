<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'full_name'=>'required|string|min:2|max:100',
            'email'=>'email|required|unique:users,email|regex:/^[\w\.-]+@([\w\-]+\.)+[a-zA-Z]{2,6}$/',
            'password'=>['required','string','confirmed',
                Password::min(8)
                ->mixedCase()      // uppercase + lowercase
                ->letters()        // must contain letters
                ->numbers(),],
            'password_confirmation'=>'required|string',
        ];
    }
}
