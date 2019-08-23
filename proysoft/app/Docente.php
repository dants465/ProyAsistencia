<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    
    //Campos Obligatorios
    
    public $incrementing = false;
    protected $primaryKey='idcodigo';
    protected $fillable=['idcodigo','foto','dni','appaterno',
    'apmaterno','nombre','telefono','email','direccion'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
    protected $table="tb_docente";
}
