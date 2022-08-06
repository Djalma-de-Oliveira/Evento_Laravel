<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'user.name' => 'required',
            'user.email' => ['required','email'],
            'user.cpf' => 'required',
            'user.password' => ['required','min:8'],
            'phones.0.number' => ['required','size:14'],
            'phones.1.number' => ['required','size:15'],
            'user.cep' => 'required',
            'user.uf' => ['required','size:2'],
            'user.city' => 'required',
            'user.street' => 'required',
            'user.number' => ['required', 'numeric', 'integer'],
            'user.district' => 'required',
            'user.complement' => ['nullable','max:25'],



        ];
    }

    public function attributes()
    {
            'user.name' => 'nome',
    }

}
