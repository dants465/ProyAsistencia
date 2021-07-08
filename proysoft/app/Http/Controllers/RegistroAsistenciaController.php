<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request\RegistroAsistenciaRequest;
use App\User;
use App\Docente;
use App\CargaDetalle;
use App\Matricula;
use App\Alumno;
use App\RegistroAsistencia;
use DB;

class RegistroAsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $docente="";
        if (\Auth::check())
            $docente=\Auth::user()->permisos;
        else 
            return view('auth/login');
        
        $hoy=getdate();
        $fecha= $hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"];
        $regasis=DB::select("call sp_list_reg_asistencia('$docente','$fecha')");
        return $hoy;
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
    public function store(RegistroAsistenciaRequest $request)
    {
        // 
        $hoy=getdate();
        try{
            DB::begintransaction();
                $regasist=new RegistroAsistencia;
                $regasist->iddetalle=$request->idacad;
                $regasist->tema=$request->tema;
                $regasist->fecha=$hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"];
                $regasist->hora=$hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"];
                $$regasist->save();
                $idcodigo=$request->get('idcodigo');
                $i=0;
                while ($i<count($idproducto)) {
                    # code...
                    $detalle=new CompraDetalle;

                    $detalle->save();
                    $i++;
                }
            DB::commit();
        }catch(Exception $e){
            DB::rollback();
        }
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
        return $id;
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
