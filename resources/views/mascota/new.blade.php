<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Mascota</title>
  </head>
  <body>
    <div class="container">
    <h1>Agregar Mascota</h1>
    </div>
    
<!-- formulario para agregar mascota -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('mascotas.store') }} ">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
                <div id="idHelp" class="form-text">Código Mascota</div>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre">
                <div id="nombreHelp" class="form-text">Nombre</div>
            </div>

            <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" id="especie" aria-describedby="especieHelp" name="especie" placeholder="Especie">
                <div id="especieHelp" class="form-text">Especie</div>
            </div>

            <div class="mb-3">
                <label for="raza" class="form-label">Raza</label>
                <input type="text" class="form-control" id="raza" aria-describedby="razaHelp" name="raza" placeholder="Raza">
                <div id="razaHelp" class="form-text">Raza</div>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" aria-describedby="edadHelp" name="edad" placeholder="Edad">
                <div id="edadHelp" class="form-text">Edad</div>
            </div>

            <label for="propietario">Asignar Propietario</label>
            <select class="form-select" name="codePropietario" id="propietario" required>
                <option selected disabled value="">Seleccione un Propietario</option>
                @foreach( $propietarios as $propietario)
                    <option value=" {{ $propietario->id }} "> {{ $propietario->nombre }} </option>
                @endforeach
            </select>

            <div class="m-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Guardar
                </button>    
                      
                <a href=" {{ route('mascotas.index') }} " class="btn btn-danger"> 
                    <img src=" {{ asset('icons/cancel.png') }} " alt="cancelar" width="26" height="26"> 
                    Cancelar
                </a>
            </div>

        </form>
        </div>
    </div>
</div>
<!-- fin formulario -->














    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>