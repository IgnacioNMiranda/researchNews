<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            //Regex alfanumerico de máximo 50 caracteres
            'code' => 'nullable|regex:/^(?!\s*$)[-a-zA-Z0-9_:,. ]{1,50}$/',
            'name' => 'required|regex:/^(?!\s*$)[-a-zA-Z0-9_:,. ]{1,50}$/|unique:projects,name,' . $this->project,
            'state' => 'required',
            'startDate' => 'required|before_or_equal:today',
            'endDate' => 'required|after_or_equal:startDate',
            'investigation_group_id' => 'required',
            'researchers' => 'required|array',
            'notResearchers' => 'nullable|array'
        ];
    }

    public function messages(){
        return [
            'code.regex' => 'Formato de código inválido',
            'name.required' => 'El campo nombre es obligatorio.',
            'name.unique' => 'Este nombre ya se encuentra en uso.',
            'name.regex' => 'Formato de nombre inválido.',
            'state.required' => 'El campo estado es obligatorio.',
            'startDate.required' => 'El campo fecha de inicio es obligatorio.',
            'startDate.before_or_equal' => 'La fecha de inicio debe ser menor o igual a la fecha actual.',
            'endDate.required' => 'El campo fecha de finalización es obligatorio.',
            'endDate.after_or_equal' => 'La fecha de término debe ser mayor o igual a la fecha de inicio.',
            'investigation_group_id.required' => 'El campo de grupo de investigacion es obligatorio.',
            'researchers.required' => 'Al menos 1 investigador debe pertenecer al grupo de investigación elegido.',
        ];
    }
}
