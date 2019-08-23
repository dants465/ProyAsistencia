@extends('base')
@section('content')
<div class="col-sm-8">
    <h2>
        Mantenimiento del registros de Cursos
        <a class="btn btn-info pull-right" href="{{route('Curso.index')}}">
            <span class="glyphicon glyphicon-share-alt"></span>Volver
        </a>
    </h2>
    @foreach($cursos as $curso)
    
    <form action="{{route('Curso.update',$curso->idcodigo)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="idcodigo" >Codigo curso :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="idcodigo" id="idcodigo" value="{{$curso->idcodigo}}">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" id="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();" value="{{$curso->nombre}}">
            </div>
        </div>
        <div class="form-group">
            <label for="disponible" class="control-label col-sm-2">Laboratorio :</label>
            <div class="col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="disponible" id="disponible" value="{{$curso->tiene_lab}}">Disponible</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >Categoria :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="categoria" id="categoria" value="{{$curso->categoria}}">
                </div>
        </div>
        <div class="form-group">
            <label for="ejemplares" class="control-label col-sm-2">Creditos :</label>
            <div class="col-sm-10">
                <input type="text" class="form-conrtrol" id="creditos" name="creditos" value="{{$curso->creditos}}">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Requisitos :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="requisitos" id="requisitos" value="{{$curso->requisitos}}">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Creditos Nec. :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="creditonecesario" id="creditonecesario" value="{{$curso->creditonecesario}}">
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