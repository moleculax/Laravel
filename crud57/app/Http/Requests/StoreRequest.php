<?php

namespace App\Http\Requests;

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
        //return false;
        return true; //se cambio para los usuarios puedan tener permiso
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //se usaron reglas de validacion del controloador BookController de store()
            'title'=>'required',
            'descripcion'=>'required'
        ];
    }

    public function messages(){
        return [
            'title.required'=>'El campo titulo es requerido',
            'descripcion.required'=>'El campo descripción es requerido'
        ];
    }
}
