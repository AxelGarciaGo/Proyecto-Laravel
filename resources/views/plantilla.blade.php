<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elecciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">TECNM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex">
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        
        <!-- Opción candidato -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Candidatos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('candidato.index') }}">Datos</a></li>
            <li><a class="dropdown-item" href="{{ route('candidato.create') }}">Registrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/candidato/pdf" target="_blank">PDF de datos</a></li>
          </ul>
        </li>
        
        <!-- Opción casilla -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Casillas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('casilla.index') }}">Datos</a></li>
            <li><a class="dropdown-item" href="{{ route('casilla.create') }}">Registrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/casilla/pdf" target="_blank">PDF de datos</a></li>
          </ul>
        </li>

        <!-- Opción eleccion -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Elecciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('eleccion.index') }}">Datos</a></li>
            <li><a class="dropdown-item" href="{{ route('eleccion.create') }}">Registrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/eleccion/pdf" target="_blank">PDF de datos</a></li>
          </ul>
        </li>

        <!-- Opción voto -->
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Votos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('voto.index') }}">Datos</a></li>
            <li><a class="dropdown-item" href="{{ route('voto.create') }}">Registrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/voto/pdf" target="_blank">PDF de datos</a></li>
          </ul>
        </li>

        <!-- Session -->
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sesion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login">Login</a></li>
            <li><a class="dropdown-item" href="logout">Logout</a></li>
          </ul>
        </li>
        <div style="padding: 10px 80px 30px 0;"></div>
      </ul>
      
      <!-- <a class="navbar-brand" href="/login">Acceder</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="logout">Salir</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       -->
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      </form>
    </div>
  </div>
</nav>


    <header>
        <div class="row">
            <div class="col-md-2">
                <img src="/tecnm_sintexto.svg" width="200px">
            </div>
            <div class="col-md-8 text-center">
                <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                <h5>Elección de la reina ITVO</h5>
                
            </div>
            <div class="col-md-2">

            </div>

        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>

</body>
</html>