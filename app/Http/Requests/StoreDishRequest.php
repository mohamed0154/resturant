<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'name'=>['required','string','max:150','min:2'],
            'category_id'=>['required','integer','exists:categories,id'],
            'description'=>['required','string','max:200','min:5'],
            'price'=>['required','numeric','max:99999999','min:10'],
            'image'=>['required','image','mimes:png,jpg,jpeg']

        ];
    }
}
