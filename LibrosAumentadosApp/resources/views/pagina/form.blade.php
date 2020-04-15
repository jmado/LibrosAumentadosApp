@extends("../layouts.master")

@section("content")

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


<div class="container">
    @isset($pagina)
        <form id="formulario" action="{{ route('pagina.update', ['pagina' => $pagina->id]) }}" method="POST" enctype="multipart/form-data" class="formulario">
        @method("PUT")
    @else
        <form id="formulario" action="{{ route('pagina.store') }}" method="POST" enctype="multipart/form-data" class="formulario">
    @endisset
        @csrf

        <div class="form-group">
            <label for="texto">Texto: </label>
           <textarea name="texto"  class="form-control" id="texto" hidden></textarea>
            <div id="editor" style="border: 1px solid black"></div>
            {{-- Editor de texto online --}}
            <div id="markup"></div>
            <script src="https://unpkg.com/pell"></script>
            <script>
                const pell = window.pell;
                const editor = document.getElementById("editor");
                //const markup = document.getElementById("markup");
                const markup = document.getElementById("texto");

                pell.init({
                element: editor,
                onChange: (html) => {
                    markup.innerHTML = "<br>";
                    markup.innerText += html;
                }
                });
                editor.content.innerHTML = '{!!$pagina->texto ?? ''!!}'
            </script>
        </div>

        <div class="form-group">
            <label for="n_pagina">Numero de página:</label>
            <input type="text" name="numero_pagina" class="form-control" id="n_pagina" value="{{$pagina->numero_pagina ?? ''}}">
        </div>

        
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" role="button" value="Editar">
        </div>
        
       
    </form>
        


</div>
    
    
@endsection