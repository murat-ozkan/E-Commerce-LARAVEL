<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //! Biz true yaptık
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    //? ************** Bir de özel mesajlar için fonk oluşturalım...

    public function messages(): array
    {
        return [
            'name.min' => 'Must be 3 chars at least',
            'subject.required' => 'Subject can not be empty'
        ];
    }
}
