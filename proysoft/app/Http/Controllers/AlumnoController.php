<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Resource\AlumnoRequest;
use App\Alumno;
use DB;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos=Alumno::paginate(10);
        return view('Alumno.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumnos=Alumno::all();
        return view('Alumno.create',compact('alumnos'));
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
        $alumnos=new Alumno;
        $alumnos->idcodigo=$request->idcodigo;
        $alumnos->foto=$request->foto;
        $alumnos->dni=$request->dni;
        $alumnos->appaterno=$request->appaterno;
        $alumnos->apmaterno=$request->apmaterno;
        $alumnos->nombre=$request->nombre;
        $alumnos->telefono=$request->telefono;
        $alumnos->email=$request->email;
        $alumnos->direccion=$request->direccion;
        $alumnos->save();
        return redirect()->route('Alumno.index');//->with('mensaje','El curso ha sido guardado');
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
        $alumnos=Alumno::where('idcodigo',$id)->get();
        //$cursos=Curso::find($id);
        
        //$idcodigo=$id->input('idcodigo');
        //$cursos=Curso::find($idcodigo);
        return view('Alumno.edit',compact('alumnos'));
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
        $alumnos=Alumno::where('idcodigo',$id)->first();
        //$idcodigo=$id->input('idcodigo');
        //$cursos=Curso::find($id);
        
        $alumnos->idcodigo=$id;
        $alumnos->foto=$request->foto;
        $alumnos->dni=$request->dni;
        $alumnos->appaterno=$request->appaterno;
        $alumnos->apmaterno=$request->apmaterno;
        $alumnos->nombre=$request->nombre;
        $alumnos->telefono=$request->telefono;
        $alumnos->email=$request->email;
        $alumnos->direccion=$request->direccion;
        $alumnos->save();
        return redirect()->route('Alumno.index');
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
