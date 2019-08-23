@extends('base')
@section('content')
<div class="col-sm-8">
    <h2>
        Ingresar nuevo curso
        <a href="{{route('Curso.index')}}" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-share-alt"></span>
        </a>
    </h2>
    
    <form class="form-horizontal" action="{{route('Curso.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >Codigo curso :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="idcodigo">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.ToUpperCase();">
            </div>
        </div>
        <div class="form-group">
            <label for="disponible" class="control-label col-sm-2">Laboratorio :</label>
            <div class="col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="disponible">Disponible</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-sm-2" for="edicion" >Categoria :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="categoria">
                </div>
        </div>
        <div class="form-group">
            <label for="ejemplares" class="control-label col-sm-2">Creditos :</label>
            <div class="col-sm-10">
                <input type="text" class="form-conrtrol" name="creditos">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Requisitos :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="requisitos">
            </div>
        </div>
        <div class="form-group">
            <label for="publicacion" class="control-label col-sm-2">Creditos Nec. :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="creditonecesario">
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