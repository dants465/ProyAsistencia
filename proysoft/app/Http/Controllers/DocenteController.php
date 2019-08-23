<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Docentes = Docente::Paginate(10);
        return view("docente/index ",compact("Docentes"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //abrimos el formulario
        $Docentes = Docente::all();
        return view('docente.create',compact('Docentes'));
    }

    /**0
     * S1111tore a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Docentes=new Docente;
        //Movemos la imagen        
        $Docentes->idcodigo=$request->idcodigo;
        $Docentes->foto=$request->foto;
        $Docentes->dni=$request->dni;
        $Docentes->appaterno=$request->appaterno;
        $Docentes->apmaterno=$request->apmaterno;
        $Docentes->nombre=$request->nombre;
        $Docentes->telefono=$request->telefono;
        $Docentes->email=$request->email;
        $Docentes->direccion=$request->direccion;

        $Docentes->save();
        return redirect()->route('docente.index')->with('mensaje','El docente ha sido guardado');

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
        //$Docentes=Docente::find($id);       
        $Docentes=Docente::where('idcodigo',$id)->get(); 
        return view('docente.edit',compact('Docentes'));
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
        $Docentes=Docente::where('idcodigo',$id)->first();
        //
        //$Docentes=Docente::find($id);
        $Docentes->idcodigo=$request->idcodigo;
        $Docentes->foto=$request->foto;
        $Docentes->dni=$request->dni;
        $Docentes->appaterno=$request->appaterno;
        $Docentes->apmaterno=$request->apmaterno;
        $Docentes->nombre=$request->nombre;
        $Docentes->telefono=$request->telefono;
        $Docentes->email=$request->email;
        $Docentes->direccion=$request->direccion;
        $Docentes->save();
        return \redirect()->route('docente.index');//->with('mensaje','El Registro del Docentes fue modificado!');
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
