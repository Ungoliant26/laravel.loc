<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required | min:2 | max:25',
            'email' => 'required | email',
            'subject' => 'required | min:5 | max:25',
            'message' => 'required | min:10 | max:50'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Заполните поле "Имя"',
            'name.min' => 'Введите корректное Имя',
            'name.max' => 'Введите корректное Имя',
            'email.required' => 'Заполните поле "Email"',
            'email.email' => 'Введите корректный Email',
            'subject.required' => 'Заполните поле "Тема"',
            'message.required' => 'Заполните поле "Сообщение"'
        ];
    }
}
