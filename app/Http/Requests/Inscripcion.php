<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Inscripcion extends FormRequest
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
            //Reglas de validación de BD
            'nombre'=> 'required|max:255', 
            'apellido1'=> 'required|max:255', 
            'fecha_nac'=>'required|date' , 
            'genero'=>'required',
            //Falta definir el comportamiento cuando el participante sea menor de 14 años. No DNI o email.
            
        ];
    }
}
