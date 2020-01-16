<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    
    <script src="https://kit.fontawesome.com/865c0f1a91.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Libros Aumentados</title>
</head>
<body>

    <div class="container">
    <!-- Cabecera -->
    <header class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            {{--@yield("title")--}}
            <!-- Menu -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('libro.index')}}">Libros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('capitulo.index')}}">Capitulos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Paginas</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Multimedia
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('imagen.index')}}">Imagenes</a>
                        <a class="dropdown-item" href="{{route('galeria.index')}}">Galerias</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Video</a>
                        <a class="dropdown-item" href="#">Audio</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Elementos 3D</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Otros</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
        </div>
    </header>
       




    <!-- Contenido -->
    <div class="row principal middle-xs around-sm">

        <!-- Contenido principal -->
        <div class="col-xs-12 col-sm-10">
            <div class="contenido">
                @yield("content")
            </div>
        </div>

    </div>

    

    <!-- Pie de pagina -->
    <footer class="row">
        <div class="col-xs-12">
            <div class="pie">
                <h2>Pie de pagina</h2>
            </div>
        </div>
    </footer>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>