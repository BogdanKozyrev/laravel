<?php

namespace App\Http\Requests\Ingredients;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:2', 'max:64']
        ];
    }

    public function messages()
    {
        $messages = parent::messages();
        $messages['title.required'] = 'Название ингридиента обязательно к заполнению';
        $messages['title.min'] = 'Название слишком короткое. Минимальное значение 2 символа';
        $messages['title.max'] = 'Название слишком длинное. Максимальное значение 64 символа';

        return $messages;
    }
}
