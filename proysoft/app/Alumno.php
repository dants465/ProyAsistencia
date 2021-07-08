<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='tb_alumno';
    //Campos obligatorios
    public $incrementing = false;
    protected $primaryKey='idcodigo';
    protected $fillable=['foto','dni','appaterno','apmaterno','nombre','telefono','email','direccion'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
}
