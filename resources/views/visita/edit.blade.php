<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Visita</title>
  </head>
  <body>
    <div class="container">
    <h1>Editar Visita</h1>
    </div>
    
<!-- formulario para Editar mascota -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('visitas.update',['visita'=>$visita->id]) }} ">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled
                value = "{{ $visita->id }}">
                <div id="idHelp" class="form-text">Código</div>
            </div>

            <label for="mascota">Mascota</label>
            <select class="form-select" name="codeMascota" id="mascota" required>
                <option selected disabled value="">Seleccione una Mascota</option>
                @foreach( $mascotas as $mascota)
                    @if( $mascota->id == $visita->mascota_id)
                    <option selected value=" {{ $mascota->id }} "> {{ $mascota->nombre }} </option>
                    @else
                    <option value=" {{ $mascota->id }} "> {{ $mascota->nombre }} </option>
                    @endif
                @endforeach
            </select>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha Visita</label>
                <input type="date" class="form-control" id="fecha" aria-describedby="fechaHelp" name="fecha" placeholder="Fecha Visita"
                value = "{{$visita->fecha_visita}}">
                <div id="fechaHelp" class="form-text">Fecha Visita</div>
            </div>

            <div class="mb-3">
                <label for="motivo" class="form-label">Motivo</label>
                <input type="text" class="form-control" id="motivo" aria-describedby="motivoHelp" name="motivo" placeholder="Motivo Visita"
                value = "{{$visita->motivo}}">
                <div id="motivoHelp" class="form-text">Motivo Visita</div>
            </div>

            <div class="mb-3">
                <label for="tratamiento" class="form-label">Tratamiento</label>
                <input type="text" class="form-control" id="tratamiento" aria-describedby="tratamientoHelp" name="tratamiento" placeholder="Tratamiento"
                value="{{$visita->tratamiento}}">
                <div id="tratamientoHelp" class="form-text">Tratamiento</div>
            </div>

            <div class="m-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Guardar
                </button>    
                      
                <a href=" {{ route('visitas.index') }} " class="btn btn-danger"> 
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