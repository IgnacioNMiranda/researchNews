<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            //Regex alfanumerico de máximo 30 caracteres
            'name' => 'required|regex:/^(?!\s*$)[-a-zA-Z0-9_:,. ]{1,30}$/|unique:products,name',
            //Regex alfanumerico de máximo 500 caracteres
            'description' => 'nullable|regex:/^(?!\s*$)[-a-zA-Z0-9_:,. ]{1,500}$/',
            'researchers' => 'required|array',
            'date' => 'required',
            'investigation_group_id' => 'required',
            'project_id'=> 'nullable',
        ];    
    }

    public function messages(){

        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.unique' => 'Este nombre ya se encuentra en uso.',
            'name.regex' => 'Formato de nombre inválido.',
            'description.regex' => 'Formato de descripción inválido.',
            'researchers.required' => 'Debe elegir al menos un investigador registrado.',
            'date.required' => 'El campo fecha es obligatorio.',
            'investigation_group_id' => 'el campo grupo de investigacion es obligatorio.',
        ];
    }
}
