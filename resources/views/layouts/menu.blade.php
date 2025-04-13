<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Veterinaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('mascotas.index') }}">Mascotas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('visitas.index') }}">Visitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('propietarios.index') }}">Propietarios</a>
        </li>
      </ul>

      <!-- Botón de Cerrar Sesión -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link text-white text-decoration-none" style="padding: 0; border: none; background: none;">
              Cerrar sesión
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
