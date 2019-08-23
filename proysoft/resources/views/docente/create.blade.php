@extends('base')
@section('content')
<div class="col-sm-8">
    <h2>
        Ingresar nuevo docente
        <a href="{{route('docente.index')}}" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-share-alt"></span>
        </a>
    </h2>

    <form class="form-horizontal" action="{{route('docente.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="idcodigo">IdCodigo :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="idcodigo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="foto" >Foto :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="foto">
                </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">DNI :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="dni">
            </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">Paterno :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="appaterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">Materno :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="apmaterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">Nombre :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>

        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">Telefono :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefono  ">
            </div>
        </div>    
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">Email :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label col-sm-2">Direccion :</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" name="direccion">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success">
                    <span class="glyphicon glyphicon-floppy-saved"></span>Guardar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection