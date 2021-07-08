<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroDetalle extends Model
{
    //
    protected $table='tb_registrodetalle';
    //Campos obligatorios
    protected $fillable=['idregistro','idalumno','horallega'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
}
