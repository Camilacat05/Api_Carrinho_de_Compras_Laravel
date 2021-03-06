<?php

namespace App\Http\Requests\Core;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name_fantasya' => ['required', 'unique:store'],
            'cnpj' => ['required']
        ];
    
    }
    public function attributes(){
        return [
            'name_fantasya' => 'Nome Fantasia'
        ];
    }
}
