<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
//Basta con poner lo de debajo para que busque la base de datos. No hace falta poner toda la ruta. 
use DB; 


class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view ('inscripcion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscripcion=$request->except('_token','Registrarse'); 
        //return ($inscripcion); 
        if(isset($inscripcion['zombie'])){
            $zombie=1;  
        }else{
            $zombie=0;  
        }
         //return $zombie; 
        try {
            DB::table('participante')->insertGetId(['nom_part'=>$inscripcion['nombre'], 'apellido1_part'=>$inscripcion['apellido1'],  'edad_part'=>$inscripcion['fecha_nac'], 'email_part'=>$inscripcion['email'], 'genero_part'=>$inscripcion['genero'],'dni_part'=>$inscripcion['dni'], 'zombie_part'=>$zombie]);
            return view('inscrito'); 
        } catch (\Throwable $th) {
            return($th); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
