<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFormRequest extends FormRequest
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
            'tarefa'=>'required|min:5' //campo dentro do create
        ];
    }

    public function messages()
    {
        return[
            'required' => 'O campo :attribute é obrigatório!',
            'min' => 'O campo :attribute precisa ter pelo menos 5 caracteres'
        ];
    }
}