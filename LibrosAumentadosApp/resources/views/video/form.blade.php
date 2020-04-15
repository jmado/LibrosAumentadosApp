@extends("layouts.master")
@section('content')

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
            @isset($datos)
                <form action="{{ route('video.update', $datos->id)}}" method="POST" enctype='multipart/form-data'>
                @method("PUT")
            @else
                <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
            @endisset
                @csrf
                
                

                

                <div class="form-group">
                    <label for="title">Título:</label>
                    <input id="title" type="text" name="titulo" class="form-control" value="{{$datos->titulo ?? ''}}" required>
                </div>
                <div class="form-group">
                    <label for="info">Descripción:</label>
                    <input id="info" type="text" name="descripcion" class="form-control" value="{{$datos->descripcion ?? ''}}">
                </div>
                
                <div class="form-group">
                    <label for="video_url">Url del video (vimeo):</label>
                    <input id="video_url" type="text" name="video" class="form-control" value="{{$datos->video ?? ''}}" placeholder="https://vimeo.com/999999999">
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