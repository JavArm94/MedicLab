<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medico;
use App\Models\Usuario;
use App\Models\Certificado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function reportecertificados($idusuario = 1)
    {
        
            $usuario = Usuario::findOrFail($idusuario);
              
       //$certificados = $usuario->certificados()->get();

        
        return view('reportes.certificados.index')->with('usuario', $usuario);
        //->with('certificados',$certificados)

    }

    public function reportexmedicoblade(Request $request)
    {
        
        $medicos = Medico::get()->pluck('apellidoNombres','id');  
        $medicos->prepend('Seleccione un médico ...', $key = null);
           
        $medico = null;    
       
       $certificados = Certificado::certificadosFiltro($request->idmedico, $request->estado, $request->fecha_inicial, $request->fecha_final);

        
        return view('reportes.certificadosXmedico.index')->with('medicos', $medicos)->with('medico', $medico)->with('certificados',$certificados);
       

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::findOrFail(1);

        //$certificados = $usuario->certificados()->get();

        
        return view('reportes.certificados.index')->with('usuario', $usuario);
        //->with('certificados',$certificados)

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
