@extends('base')
@section('titulo')
    Mantenimiento Docente
@stop
@section('content')
<div class="col-sm-8">
    <h2>
        <a href="{{route('Alumno.create')}}" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </h2>
    
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th with="20px">ID</th>
                <th>Foto</th>
                <th>DNI</th>
                <th>Ap Paterno</th>
                <th>Ap Materno</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->idcodigo}}</td>
                <td>{{$alumno->foto}}</td>
                <td>{{$alumno->dni}}</td>
                <td>{{$alumno->appaterno}}</td>
                <td>{{$alumno->apmaterno}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>{{$alumno->email}}</td>
                <td>{{$alumno->direccion}}</td>
                <td><a href="" class="btn btn-link"><span title="Ver" class="glyphicon glyphicon-"></span></a></td>
                <td><a href="{{route('Alumno.edit',$alumno->idcodigo)}}" title="Editar" class="btn btn-link"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td>
                    <form action="{{route('Alumno.destroy',$alumno->idcodigo)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link" title="Eliminar">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
    {!!$alumnos->render()!!}
</div>
@endsection