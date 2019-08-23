<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Campos Obligatorios
    protected $table='tb_cursos';
    protected $primaryKey='idcodigo';
    public $incrementing = false;
    protected $fillable=['nombre','tiene_lab','categoria',
    'creditos','requisitos','creditonecesario'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
}
