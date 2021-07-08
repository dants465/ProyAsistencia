@extends('base')
@section('content')
<div class="col-sm-10 col-sm-offset-1">
    @include('partials.error')
    <form action="{{route('RegAsistencia.store')}}" class="form-horizontal" method="POST">
        @csrf
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="form-group">
                    <label for="tema" class="control-label col-sm-2">Tema: </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="tema" id="tema" value={{$regasis[0]->tema}}>
                    </div>
                </div>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="id" id="id" value={{$regasis[0]->id}}>
                    <input class="form-control" type="text" name="idacad" id="idacad" value={{$regasis[0]->idacad}}>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Alumno</th>
                            <th>Asiste</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($regasis as $alumno)
                        <tr>
                            <td>{{$alumno->idcodigo}}</td>
                            <td><?php echo $alumno->appaterno.' '.$alumno->apmaterno.' '.$alumno->nombre ?></td>
                            <td>
                            <div class="form-group">
                                <label class="radio-inline"><input type="radio" value="1" name="tipo_{{$alumno->idcodigo}}" {{($alumno->Asiste==1) ? 'checked':'' }}checked> Asistio</label>
                                <label class="radio-inline"><input type="radio" value="0" name="tipo_{{$alumno->idcodigo}}" {{($alumno->Asiste==0) ? 'checked':'' }}>No Asistio</label>
                            </div>
                            </td>
                            <td>
                                <a href="{{route('RegAsistencia.show',$alumno->idcodigo)}}" class="btn btn-link"><span title="Asistio" class="glyphicon glyphicon-record" style="color:{{($alumno->Asiste==0) ? 'Black':'Blue' }}"></span></a>
                            </td>
                            <td>{{$alumno->horallega}}</td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form-group" id="guardar">
            <div class="col-sm-offset-10 col-sm-8">
                <button type=submit class="btn btn-success">
                    <span class="glyphicon glyphicon-floppy-saved"></span>Guardar
                </button>
            </div>
        </div>
    </form>
</div>
<div class="col-sm-2">
</div>
@endsection