<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargaDetalle extends Model
{
    //
    protected $table='tb_cargadetalle';
    //Campos obligatorios
    protected $primaryKey='idcodigo';
    protected $fillable=['idacademica','iddocente','grupo','horas','dias','salon'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
}
