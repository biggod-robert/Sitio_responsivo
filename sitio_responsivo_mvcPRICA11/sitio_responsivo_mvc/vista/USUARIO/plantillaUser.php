
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo nombrar_pagina($seccion) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="../../css/styles_header.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-info-subtle">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./img/logo.png" class="img-fluid" alt="">¡¡BIENVENIDO!! </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page"
                            href="controlador.php?seccion=seccion1">Inicio</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Hoteles
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hoteles</a></li>
                                <li><a class="dropdown-item" href="#">Hotel puerta de orion</a></li>
                                <li><a class="dropdown-item" href="#">Hotel wimpy</a></li>
                                <li><a class="dropdown-item" href="#">Hotel Las Palmas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sitios Turísticos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./sitios turisticos/Túneles.html">Túneles
                                        Naturales</a></li>
                                <li><a class="dropdown-item" href="./sitios turisticos/Pinturas.html">Pinturas
                                        Rupestres</a></li>
                                <li><a class="dropdown-item" href="./sitios turisticos/Laguna.html">Laguna Damas del
                                        Nare</a></li>
                                <li><a class="dropdown-item" href="./sitios turisticos/Puerta.html">Puerta de Orión</a>
                                </li>
                                <li><a class="dropdown-item" href="./sitios turisticos/Pozos.html">Pozos Naturales</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="./sitios turisticos/Tranquilandia.html">Tranquilandia</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Restaurantes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="./restaurantes/Restaurante el Diamante.html">Restaurante el Diamante</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="./restaurantes/Restaurante Catumare Comidas Amazónicas.html">Restaurante
                                        Catumare Comidas Amazónicas</a></li>
                            </ul>
                        </li>
                        <a class="nav-link active" aria-current="page"
                            href="controlador.php?seccion=seccion2">Registrar</a>
                    </div>
                </div>
            </div>
        </nav>




    </header>






    