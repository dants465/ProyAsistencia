@extends('base')
@section('titulo')
    Mantenimiento Docente
@stop
@section('content')
<div class="col-sm-8">
    <h2>
        <a href="{{route('Docente.create')}}" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>DNI</th>
                <th>Paterno</th>
                <th>Materno</th>                
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Direccion</th>  
            </tr>
        </thead>
        <tbody>
            @foreach($Docentes as $docente)
            <tr>
                <td>{{$docente->idcodigo}}</td>
                <td>{{$docente->foto}}</td>
                <td>{{$docente->dni}}</td>
                <td>{{$docente->appaterno}}</td>
                <td>{{$docente->apmaterno}}</td>
                <td>{{$docente->nombre}}</td>
                <td>{{$docente->telefono}}</td>
                <td>{{$docente->email}}</td>    
                <td>{{$docente->direccion}}</td>

                <td><a href="" class="btn btn-link"><span title="Ver" class="glyphicon glyphicon-"></span></a></td>
                <td><a href="{{route('Docente.edit',$docente->idcodigo)}}" title="Editar" class="btn btn-link"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td>
                    <form action="{{route('Docente.destroy',$docente->idcodigo)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link" title="Eliminar">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                </tr>

            @endforeach
        </tbody>
    </table>
    {!!$Docentes->render()!!}
</div>
@endsection