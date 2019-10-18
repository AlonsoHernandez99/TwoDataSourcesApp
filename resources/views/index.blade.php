@extends('layout.app')
@section('contenido')
    <h1>Estudiantes BD ITCHA</h1><br>

<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Fecha Nac</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Acciones</th>
                        </tr>
                    <tbody>
                        @foreach ($result as $alum)
                            <tr>
                                <th>{{$alum->aspirante->codigo}}</th>
                                <th>{{$alum->aspirante->nombres}} {{$alum->aspirante->apellidos}}</th>
                                <th>{{$alum->aspirante->telefono}}</th>
                                <th>{{$alum->fecha_nac}}</th>
                                <th>{{$alum->correo}}</th>
                                <th>{{$alum->direccion}}</th>
                                <th><a href="{{route('showAlumno',$alum->id)}}" class="btn btn-primary btn-sm">Crear Cuenta</a></th>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12 d-flex justify-content-center">
                    {{ $result->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection