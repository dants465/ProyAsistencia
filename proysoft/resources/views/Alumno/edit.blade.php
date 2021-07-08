@extends('base')
@section('titulo')
    Mantenimiento Alumno
@stop
@section('content')
<div class="col-sm-8">
    <h2>
        Mantenimiento del registros de Alumnos
        <a class="btn btn-info pull-right" href="{{route('Alumno.index')}}">
            <span class="glyphicon glyphicon-share-alt"></span>Volver
        </a>
    </h2>
    @foreach($alumnos as $alumno)
    
    <form action="{{route('Alumno.update',$alumno->idcodigo)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="idcodigo" >Codigo alumno :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="idcodigo" id="idcodigo" value="{{$alumno->idcodigo}}">
                </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Foto :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="foto" id="foto" value="{{$alumno->foto}}">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">DNI :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="dni" id="dni" value="{{$alumno->dni}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Ap Paterno :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="appaterno" id="appaterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();" value="{{$alumno->appaterno}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Ap Materno :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apmaterno" id="apmaterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();" value="{{$alumno->apmaterno}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" id="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();" value="{{$alumno->nombre}}">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >Telefono :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefono" id="telefono" value="{{$alumno->telefono}}">
                </div>
        </div>
        <div class="form-group">
            <label for="ejemplares" class="control-label col-sm-2">Email :</label>
            <div class="col-sm-10">
                <input type="text" class="form-conrtrol" id="email" name="email" value="{{$alumno->email}}">
            </div>
        </div>
        
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Direccion :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{$alumno->direccion}}">
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