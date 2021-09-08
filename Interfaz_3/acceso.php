?php
    include("../../database/conexion.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Hospital Héroes del Bicentenario</title>
    <link rel="icon" type="image/svg" href="hospital.svg"/>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light  mb-0">Hospital Héroes del Bicentenario<i class="icon ion-md-hand mr-3"></i><i class="icon ion-md-heart mr-3"></i></h4>
            </div>
            <div class="menu">
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>Dashboard</a>
                <a href="personal.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>Personal</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>Estadísticas</a>
                <a href="acceso.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-book lead mr-2"></i></i>Registro de acceso</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-close lead mr-2"></i></i>Cerrar cesión</a>
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline position-relative d-inline-block my-2">
                        <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
                        </form>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/user-1.png" class="img-fluid rounded-circle avatar mr-2"
                            alt="https://generated.photos/" />
                            Diego Velázquez
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Mi perfil</a>
                            <a class="dropdown-item" href="#">Suscripciones</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cerrar sesión</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="bg-grey w-100">
                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-8">
                                <h1 class="font-weight-bold mb-0">Registro de acceso</h1>
                                <p class="lead text-muted">Revisa la última información</p>
                            </div>
                            <div class="col-lg-3 col-md-3 d-flex">
                                <img src="assets/img/Captura.PNG">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="typo-headers">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                        <h2 style="color:black;" style="text-align:center;">Seleccione el ambiente y empleado:</h2>
                                        <hr>
                                        <div class="alert alert-danger" role="alert">
                                            <p style="font-size:130%;">El hospital se divide en 4 ambientes. Presione el boton del ambiente que desea analizar; 
                                                a su derecha hay un plano del hospital que sirve como guía.
                                            </p>
                                            <hr>
                                            <form action="actividad.php" method="post">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="selectLg" class=" form-control-label">Ambiente</label>
                                                    </div>
                                                    <div class="col-10 col-md-8">
                                                        <select name="area" id="selectLg" class="form-control-lg form-control">
                                                            <option value="all">Cualquiera</option>
                                                            <option value="Laboratorio">Laboratorio</option>
                                                            <option value="Consultorio">Consultorio</option>
                                                            <option value="Sala de espera">Sala de espera</option>
                                                            <option value="Sala de seguridad">Sala de seguridad</option>
                                                            <option value="Limpieza">Limpieza</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="selectLg" class=" form-control-label">Trabajador</label>
                                                    </div>
                                                    <div class="col-10 col-md-8">
                                                        <select name="DNI" id="selectLg" class="form-control-lg form-control">
                                                            <option value="all">Cualquiera</option>
                                                            <?php
                                                                $query = mysqli_query($conn,"SELECT * FROM empleado");
                                                                $nr = mysqli_num_rows($query);
                                                                for ($i=0; $i <$nr; $i++){
                                                                    $n = $i + 1;
                                                                    $row = mysqli_fetch_array($query);
                                                                    echo "<option value='".$row['DNI']."'>".$row['nombre']."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <button type="submit" class="btn btn-info">Ver accesos</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <picture>
                                            <source media="(min-width: 650px)" srcset="assets/img/plano.png">
                                            <source media="(min-width: 465px)" srcset="assets/img/plano.png">
                                            <img src="assets/img/plano.png" style="width:auto;">
                                        </picture>
                                    </div>     
                                </div>  
                            </div>
                        </div>
                    </div>                    
                </section>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </script>
</body>

</html>