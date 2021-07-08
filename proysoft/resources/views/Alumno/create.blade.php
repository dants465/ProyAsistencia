@extends('base')
@section('titulo')
    Añadiendo Alumno
@stop
@section('content')
<div class="col-sm-8">
    <h2>
        Ingresar nuevo Alumno
        <a href="{{route('Alumno.index')}}" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-share-alt"></span>
        </a>
    </h2>
    
    <form class="form-horizontal" action="{{route('Alumno.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >Codigo alumno :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="idcodigo">
                </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >Foto :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="foto">
                </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >DNI del alumno :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="dni">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="appaterno">Apellido paterno :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="appaterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="apmaterno">Apellido materno :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apmaterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Telefono :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Email :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Direccion :</label>
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