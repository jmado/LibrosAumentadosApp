@extends("layouts.master")



@section("content")
    <a href="{{ route('libro.create') }}">Nueva</a><br>
    <div class="todas">
        @foreach ($libroList as $libro)
            <div class="libro">    
            <p><a href='{{$libro->cubierta}}'><img src='{{$libro->cubierta}}' class="cubierta" ></a></p>
                <p>Titulo: {{$libro->titulo}}</p>
                <p>Subtitulo: {{$libro->subtitulo}}</p>
                <p><a href="{{route('libro.edit', $libro->id)}}">Modificar</a></p>
                    <form action = "{{route('libro.destroy', $libro->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Borrar">
                    </form>
            </div>
        @endforeach
        </div>
    @endsection