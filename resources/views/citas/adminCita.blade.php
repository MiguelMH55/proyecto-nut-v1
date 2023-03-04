
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <h4>Vista previa de las citas</h4>
    
    <a href="/adminCitaR" class="btn btn-link">Agendar cita</a>
    <a href="/adminCitaL" class="btn btn-link">Listar cita</a>
    <div class="col-sm-12">
        @yield('contenido');
    </div>
</body>
</html>
