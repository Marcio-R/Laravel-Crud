<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClienteRequest extends FormRequest
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
        $id = $this->segment(2);

    
        return [
        'name' => "required|min:3|max:255",
        'cpf' => "required|min:1|max:11|unique:clients,cpf,{$id},id",
        'email' => 'required|email',
        'phone' => 'required|min:8|max:12',
        'date_birth' => 'required|date',
        'sex' => 'required|in:m,f',
        'marital_status' => 'required',
        'defaulter' => 'in:s,n',
        'physical_disability' => 'max:255',
        'image' => 'nullable|image|max:5128',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Campo nome não está preenchido.',
            'cpf.required.max' => 'Campo esta faltando números.',
            'email.required' => 'Campo Obrigatorio.',
            'phone.min' => 'Digite seu telefone.',
            'date_birth.required' => 'Infome sua data de nascimento.',
            'sex.required' => 'Sexo não está marcado.',
            'marital_status.required' => 'Infome o estado civil',
        ];
    }
}
