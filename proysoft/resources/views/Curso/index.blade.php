@extends('base')
@section('content')
<div class="col-sm-8">
    <h2>
        <a href="{{route('Curso.create')}}" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </h2>
    
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th with="20px">Cod Curso</th>
                <th>Nombre</th>
                <th>Laboratorio</th>
                <th>Categoria</th>
                <th>Creditos</th>
                <th>Requisitos</th>
                <th>Creditos Nece</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->idcodigo}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->tiene_lab}}</td>
                <td>{{$curso->categoria}}</td>
                <td>{{$curso->creditos}}</td>
                <td>{{$curso->requisitos}}</td>
                <td>{{$curso->creditonecesario}}</td>
                <td><a href="" class="btn btn-link"><span title="Ver" class="glyphicon glyphicon-"></span></a></td>
                <td><a href="{{route('Curso.edit',$curso->idcodigo)}}" title="Editar" class="btn btn-link"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td>
                    <form action="{{route('Curso.destroy',$curso->idcodigo)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link" title="Eliminar">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$cursos->render()!!}
</div>
@endsection