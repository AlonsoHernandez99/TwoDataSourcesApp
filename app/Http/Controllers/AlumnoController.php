<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\User;
use App\Estudiante;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Alumno::all();
        $u = User::all();

         for ($i=0; $i < count($u) ; $i++) { 

            $a = $a->except('correo',$u[$i]->email);

          }

          $alum_id = $a->pluck('id');

          $result= Alumno::whereIn('id', $alum_id)->orderby('id', 'desc')->paginate(5);

        return view("index",compact("result"));
    }

    public function getAlumnoById($id){
        $a = Alumno::findOrFail($id);

        return view("updPass",compact("a"));
    }
    public function saveData(Request $request){
        $a = Alumno::findOrFail($request->alumno_id);
        $u = new User();
        $a->password = bcrypt($request->newpass);
        $a->update();

        $u->name = $a->aspirante->nombres;
        $u->email = $a->correo;
        $u->password = $a->password;
        $u->save();

        //Creando Cuenta en SISPRAP
        $e = new Estudiante();
        $e->nombre = $a->aspirante->nombres." ".$a->aspirante->apellidos;
        $e->fechaNac = $a->fecha_nac;
        $e->genero = $a->genero;
        $e->telefono = $a->celular;
        $e->codCarnet = $a->aspirante->codigo;
        $e->email = $a->correo;
        $e->direccion = $a->direccion;
        $e->estado = 1;
        $e->nivel_academico_id = 1;
        $e->carrera_id = $a->aspirante->id_carrera;
        $e->municipio_id = 1;
        $e->supero_limite = 0;
        $e->password = $u->password;
        $e->save();

        $e->proceso()->attach(1);

        return "Hecho Cuenta Creada al alumno en RegistroAcad y SISPRAP: ".$a->aspirante->nombres;
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
