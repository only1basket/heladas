<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Persona;
use App\User;
use App\Genero;
use App\Etnia;
use App\Ocupacion;
use App\Rubro;
use App\Centro_estudio;
use App\Usuario_detalle;
use App\Http\Requests\PersonaRequest;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::OrderBy('genero','DSC')->lists('genero','id');
        $etnias = Etnia::OrderBy('etnia','ASC')->lists('etnia','id');
        $ocupaciones = Ocupacion::OrderBy('ocupacion','ASC')->lists('ocupacion','id');
        $rubros = Rubro::OrderBy('rubro','ASC')->lists('rubro','id');
        $centro_estudios = Centro_estudio::OrderBy('centro_estudio','ASC')->lists('centro_estudio','id');

        $comunas= DB::table('comuna')
            ->join('provincia','comuna.id_provincia','=','provincia.id')
            ->join('region','provincia.id_region','=','region.id')
            ->groupBy('comuna.comuna')
            ->select('comuna.comuna as comunaNombre','region.region as regionNombre','comuna.id as id')
            ->get();

        $region = [];

        foreach ($comunas as $comuna) 
        {
            if (!isset($region[$comuna->regionNombre])) 
            {
                $region[$comuna->regionNombre] = [];
            }
            $region[$comuna->regionNombre][$comuna->id] = $comuna->comunaNombre;
        }        

        return view('admin.personas.create')
            ->with('region', $region)
            ->with('generos',$generos)
            ->with('etnias',$etnias)
            ->with('ocupaciones',$ocupaciones)
            ->with('rubros',$rubros)
            ->with('centro_estudios',$centro_estudios);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaRequest $request)
    {
        $persona = new Persona($request->all());

        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->name = $request->nombre;
        $usuario->id_usuariotipo = 1;

        $persona->save();
        $usuario->save();

        $usuarioDetalle = new Usuario_detalle();
        $usuarioDetalle->id_usuario = $usuario->id;
        $usuarioDetalle->id_persona = $persona->id;
        $usuarioDetalle->fechahora = date('Y/m/d H:i:s');
        $usuarioDetalle->save();

        return view('admin.personas.mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
