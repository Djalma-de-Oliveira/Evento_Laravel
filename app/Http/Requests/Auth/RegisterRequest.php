<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Cpf;

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
            'user.email' => ['required','email','unique:users,email'],
            'user.cpf' => ['required', new Cpf, 'unique:users,cpf'],
            'user.password' => ['required','min:8', 'confirmed'],
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
            return [
            'user.name' => 'nome',
            'user.email' => 'email',
            'user.cpf' => 'cpf',
            'user.password' => 'senha',
            'phones.0.number' => 'telefone',
            'phone.1.number' => 'celular',
            'address.cep' => 'CEP',
            'address.street' => 'logradouro',
            'address.number' => 'número',
            'anddress.uf' => 'UF',
            'address.city' => 'cidade',
            'address.district' => 'bairro',
            'address.complement' => 'complemento',
    ];

    }

    //public function messages()
    //{
       //return[
           //'user.name.required' => 'O campo :attribute deve ser preenchido '
        //];

    //}
}

