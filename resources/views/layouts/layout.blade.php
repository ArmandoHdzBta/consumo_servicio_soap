<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('titulo', "Home")</title>
</head>
<body>

    <div class="fluid-container">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul>
                        <li>
                            <a class="btn btn-primary mb-2" href="{{ route('usuario') }}">Agregar usuario</a>
                        </li>
                        <li>
                            <a class="btn btn-primary mb-2" href="{{ route('usuarios.mostrar') }}">Mostrar usuarios</a>
                        </li>
                        <li>
                            <a class="btn btn-primary mb-2" href="{{ route('usuario.editar.vista') }}">Editar usuario</a>
                        </li>
                        <li>
                            <a class="btn btn-primary mb-2" href="{{ route('usuario.eliminar.vista') }}">Eliminar usuario</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-start">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>