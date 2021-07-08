@extends('base')
@section('titulo')
    Editando Docente    
@stop
@section('content')
<div class="col-sm-8">
    <h2>
        Mantenimiento del registros de Docentes
        <a class="btn btn-info pull-right" href="{{route('Docente.index')}}">
            <span class="glyphicon glyphicon-share-alt"></span>Volver
        </a>
    </h2>   
    @foreach($Docentes as $docente) 
    <form action="{{route('Docente.update',$docente->idcodigo)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf   
        @method('PUT')
        <div class="form-group">
            <label for="idcodigo" class="control-label col-sm-2">IdCodigo :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="idcodigo" style="text-transform:uppercase;" 
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$docente->idcodigo}}">
            </div>
        </div>
        <div class="form-group">
            <label for="foto" class="control-label col-sm-2">Foto :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="foto" value="{{$docente->foto}}">
            </div>
        </div>
        <div class="form-group">
            <label for="dni" class="control-label col-sm-2">DNI :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="dni" value="{{$docente->dni}}">
            </div>
        </div>
        <div class="form-group">
            <label for="appaterno" class="control-label col-sm-2">Paterno :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="appaterno" style="text-transform:uppercase;" 
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$docente->appaterno}}">
            </div>
        </div>
        <div class="form-group">
            <label for="apmaterno" class="control-label col-sm-2">Materno :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apmaterno" style="text-transform:uppercase;" 
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$docente->apmaterno}}">
            </div>
        </div>
        <div class="form-group">
            <label for="nombre" class="control-label col-sm-2">Nombre :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" style="text-transform:uppercase;" 
                onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$docente->nombre}}">
            </div>
        </div>
        <div class="form-group">
            <label for="telefono" class="control-label col-sm-2">Telefono :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono" value="{{$docente->telefono}}">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="{{$docente->email}}">
            </div>
        </div>
        <div class="form-group">
            <label for="direccion" class="control-label col-sm-2">Direccion :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="direccion" value="{{$docente->direccion}}">
            </div>
        </div>
                       
        <div class="form-group">
            <label class="col-sm-offset col-sm-10"></label>
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success">
                    <span class="glyphicon glyphicon-floppy-saved"></span>Guardar
                </button>
            </div>
        </div>
    </form>
    @endforeach 
</div>
@endsection