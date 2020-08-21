<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500',
            'email' => 'required|email',
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'message.min' => 'Поле сообщение должно содержать не менее 15 символов',
            'subject.min' => 'Поле тема должно содержать не менее 5 символов',
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'subject.required' => 'Поле тема является обязательным',
            'message.required' => 'Поле сообщение является обязательным'
        ];
    }
}
