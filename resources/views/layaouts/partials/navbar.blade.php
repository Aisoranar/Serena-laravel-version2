<style>
  body {
    background: linear-gradient(135deg, #3175beac, #2c304c);
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    -webkit-box-direction: normal;
    margin: 0;
    overflow: hidden; /* Evita el desbordamiento del contenido fuera del cuerpo */
}
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/home#servicios') }}">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Directorio de Recursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sobre Nosotros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>

        <ul class="navbar-nav me-5 mb-2 mb-lg-0">

        @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ ucfirst(auth()->user()->name ?? auth()->user()->username) }}
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/profile">Perfil</a></li>
                  <li><a class="dropdown-item" href="/logout">Cerrar Sesión</a></li>
              </ul>
          </li>
        @endauth

       
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>

      </form>
    </div>
  </div>
</nav>