<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonaRequest extends Request
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
            'nombre'=>'min:4|max:100|required',
            'apellido'=>'min:4|max:100|required',
            'id_genero'=>'required',
            'email'=>'unique:persona',
            'id_etnia'=>'required',
            'id_comuna'=>'required',
            'id_ocupacion'=>'required',
            'id_rubro'=>'required',
            'id_centro_estudio'=>'required',
            'empresa_asesor'=>'required',
            'password'=>'required|confirmed',
        ];
    }
}
