<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                @if (Auth::check("web"))
                    <img style="border-radius:45px;width:45px;height:45px;" src="{{Storage::disk("public")->url(Auth::user()->foto ? Auth::user()->foto : "images/empleados/default.png")}}" alt="">
                    <b>{{Auth::user()->nombre}}</b>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                @if (Auth::check("web"))
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("empleados.index")}}"><i class="fa-solid fa-user-tie"></i> Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("proyectos.index")}}"><i class="fa fa-project-diagram"></i> Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("actividades.index")}}"><i class="fa fa-tasks"></i> Actividades</a>
                    </li>
                    </ul>
                    @livewire("login.logout")
                @endif
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        {{$slot}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    <script>
        livewire.on("alerta", mensaje => {
            Swal.fire({
                icon: 'error',
                title: 'Ocurrió un error',
                text: mensaje,
            })
        });
        livewire.on("exito", mensaje => {
            Swal.fire({
                icon: 'success',
                title: 'Operación cumplida',
                text: mensaje,
            })
        });
    </script>
</body>
</html>

