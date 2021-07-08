<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //
    protected $table='tb_matricula';
    //Campos obligatorios
    protected $fillable=['idalumno','idacademica','iddetalle','nota1','nota2','nota3','notafinal','asistencia','semestre'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
}
