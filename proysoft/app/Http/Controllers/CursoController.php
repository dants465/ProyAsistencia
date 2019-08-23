<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Resource\CursoRequest;
use App\Curso;
use DB;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cursos=Curso::paginate(10);
        return view('Curso.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cursos=Curso::all();
        return view('Curso.create',compact('cursos'));
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
        $cursos=new Curso;
        //Movemos la imagen
        /*if($request->hasfile('imagen')){
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $book->imagen=$name;
            $file->move(public_path().'/images/',$name);
        }*/
        $cursos->idcodigo=$request->idcodigo;
        $cursos->nombre=$request->nombre;
        if ($request->get('disponible')!=null)
            $cursos->tiene_lab=1;
        else
            $cursos->tiene_lab=0;
        $cursos->categoria=$request->categoria;
        $cursos->creditos=$request->creditos;
        $cursos->requisitos=$request->requisitos;
        $cursos->creditonecesario=$request->creditonecesario;
        $cursos->save();
        return redirect()->route('Curso.index')->with('mensaje','El curso ha sido guardado');
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
        $cursos=Curso::where('idcodigo',$id)->get();
        //$cursos=Curso::find($id);
        
        //$idcodigo=$id->input('idcodigo');
        //$cursos=Curso::find($idcodigo);
        return view('Curso.edit',compact('cursos'));
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
        $cursos=Curso::where('idcodigo',$id)->first();
        //$idcodigo=$id->input('idcodigo');
        //$cursos=Curso::find($id);
        $cursos->idcodigo=$id;
        $cursos->nombre=$request->nombre;
        if($request->get('disponible')!=null)
            $cursos->tiene_lab=1;
        else
            $cursos->tiene_lab=0;
        $cursos->categoria=$request->categoria;
        $cursos->creditos=$request->creditos;
        $cursos->requisitos=$request->requisitos;
        $cursos->creditonecesario=$request->creditonecesario;
        $cursos->save();
        return redirect()->route('Curso.index');//->with('mensaje','El Registro del curso fue modificado!');
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
