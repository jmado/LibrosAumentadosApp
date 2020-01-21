@extends("layouts.master")



@section("content")






<div class="container">
    <a href="{{ route('imagen.index') }}" class="btn btn-primary " role="button">Imagenes</a>
    <div class="imagen">
        <p>
            <a href="../{{$datos->imagen}}"><img src="../{{$datos->imagen}}" alt="{{$datos->titulo}}"></a>
        </p>
    </div> 
    <div>
      <h1>{{$datos->titulo}}</h1>
      <a href="capitulo">Capitulo: {{$datos->capitulo_id}}</a>
      <p class="lead">Descripcion: {{$datos->descripcion}}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <a href="{{route('imagen.edit', $datos->id)}}" class="btn btn-sm btn-info" role="button">Modificar</a>
            <a href="{{route('imagen.delete', $datos->id)}}" class="btn btn-sm btn-danger" role="button">Borrar</a>
        </div>
    </div>
    </div>
  </div>

@endsection