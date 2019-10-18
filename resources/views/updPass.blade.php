@extends('layout.app')
@section('contenido')

<h4>Crear Cuenta a {{$a->aspirante->nombres}}</h4>
<div class="col-md-12 m-4">
   <form action="{{route('saveData')}}" method="POST">
    {{ csrf_field() }}
        <input type="hidden" name="alumno_id" value="{{$a->id}}">
        <input type="text" name="newpass" class="form-control" placeholder="Digite nueva password"><br>
        <button type="submit" class="btn btn-secondary">Guardar Datos</button>
    </form>
</div>
@endsection