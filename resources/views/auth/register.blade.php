<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/regU.css">
    <title>Hello, world!</title>
  </head>

  <body class="bg-dark">
    
    <section>
      
        <div class="row g-0">
          
          
          <div class="col-lg-0">

          </div>
          <div class="col-lg-7">
            <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">

              
            </div>
            <div class="px-lg-5 py-lg-3 p-4 ">
              <h1 class="text-dark fw-bold mb-4">Registrate</h1>
              <form action="/register" method="POST" class="row g-3 needs-validation">
                @csrf
                <div class="col-md-4">
                  <label for="validationCustom01" class=" text-dark fw-bold">Nombre</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="nombre" id="nombre" required pattern="[a-zA-Z]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Apellidos</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="apellido" id="apellido"  required pattern="[a-zA-Z]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Telefono</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="telefono" id="telefono"  required pattern="[0-9]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              
                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Dirección</label>
                  <input type="text" class="form-control bg-dark-x border-0"  name="direccion" id="direccion" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Fecha de nacimiento</label>
                  <input type="date" class="form-control bg-dark-x border-0" name="fecha_nac" id="fecha_nac" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Numero documento</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="numdocumento" id="numdocumento" required pattern="[0-9]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class=" text-dark fw-bold">Tipo de documento</label>
                  <select class="form-select form-select-lg mb-4 border-0 bg-dark-x" name="tpdocumento" id="tpdocumento">
                    <option selected>Seleccione</option>
                    <option value="CC">Cedula de ciudadania</option>
                    <option value="CE">Cedula de extranjeria</option>
                    <option value="TI">Tarjeta de indentidad</option>
                    <option value="RC">Registro civil</option>
                    
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class=" text-dark fw-bold">Genero</label>
                  <select class="form-select form-select-lg mb-4 border-0 bg-dark-x" aria-label="Default select example" name="genero" id="genero">
                    <option selected>Seleccione</option>
                    <option value="M">Maculino</option>
                    <option value="F">Femenino</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class=" text-dark fw-bold">EPS</label>
                  <select class="form-select form-select-lg mb-4 border-0 bg-dark-x" aria-label="Default select example" name="eps" id="eps">
                    <option selected>Seleccione</option>
                    <option value="Coosalud">Coosalud</option>
                    <option value="Cajacopi">Caja copi</option>
                    <option value="Nueva_eps">Nueva eps</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="validationCustom03" class=" text-dark fw-bold">Correo</label>
                  <input type="email" class="form-control form-control-lg bg-dark-x border-0" name="email" id="email" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="validationCustom05" class=" text-dark fw-bold">Contraseña</label>
                  <input type="password" class="form-control bg-dark-x border-0" name="password" id="password" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-secondary w-100 border-0">Enviar</button>
                </div>
              </form>
            </div>
            <div class="text-center px-lg-5 pt-lg3 pb-lg-4 p-0 w-100 mt-auto">
              <p class="text-dark d-inline-block mb-0">Al registrate, aceptas nuestras condiciones de uso y</p> <a href="#" class="text-dark fw-bold text-decoration-none">politícas de privacidad.</a><br>
              <p class="text-dark d-inline-block mb-0">¿Ya tienes una cuenta?</p> <a href="/iniS" class="text-dark fw-bold text-decoration-none">Iniciar sesión</a>
            </div>
          </div>

          <div class="col-lg-5 d-none d-lg-block">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
              </div>
              <div class="carousel-inner">
                <div class="img-2 carousel-item min-vh-100 active">
                  
                  
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="fw-bold ">Nutrición inteligente</h5>
                    <button type="button" class="btn btn-dark border-0 text-light" value="">Visita nuestra pagina principal</button>

               
                  </div>
                </div>
                
                
              </div>
             
            </div>
          </div>
        </div>


      
    </section>

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