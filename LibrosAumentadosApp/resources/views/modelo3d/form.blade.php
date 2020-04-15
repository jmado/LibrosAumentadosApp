@extends("layouts.master")

@section("content")



<div class="container p-5">

<section class="text-center">
    <div class="container">    
        <button class="btn btn-primary btn-block" role="button" onclick="goBack()">Atrás</button>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        
    </div>
</section>

<div class="container ">
    <div class="form">

    
        @isset($modelo)
            <form action="{{ route('modelo.update', ['modelo' => $modelo->id]) }}" method="POST" enctype='multipart/form-data'>
            @method("PUT")
        @else
            <form action="{{ route('modelo.store') }}" method="POST" enctype="multipart/form-data">
        @endisset
            @csrf
            
            
           
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input id="title" type="text" name="titulo" class="form-control" value="{{$modelo->titulo ?? ''}}" required>
            </div>
            
           

            <div class="form-group">
                <label for="info">Descripción:</label>
                <input id="info" type="text" name="descripcion" class="form-control" value="{{$modelo->descripcion ?? ''}}">
            </div>
            
           

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="fichero" lang="es">
                    <label class="custom-file-label" for="fichero">Seleccionar Archivo .ZIP</label>
                </div>
            </div>
            
            <div class="form-group">
                @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="text-danger">{{$error}}</div>
                @endforeach
                @endif   
                </div>
            

            <input type="submit" value="Enviar" class="btn btn-primary btn-block" role="button">

            </form>

    </div>    
</div>

</div>
@endsection