<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellarobba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Grey+Qo&family=Montserrat:wght@500;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #FAF3E0;
            color: #5A4637;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #5A4637;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #D4A373;
        }
        .btn-outline-dark {
            color: #5A4637;
            border-color: #5A4637;
        }
        .btn-outline-dark:hover {
            color: #FFF;
            background-color: #5A4637;
            border-color: #5A4637;
        }
        .bg-dark {
            background-color: #5A4637 !important;
        }
        .text-white {
            color: #FAF3E0 !important;
        }
        .btn-petshop {
            background-color: #D4A373;
            color: #5A4637;
            border: none;
        }
        .btn-petshop:hover {
            background-color: #B5834A;
            color: #FAF3E0;
        }
        .card {
            border: 1px solid #D4A373;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            background-color: #FAE1C4;
        }
        .card-footer {
            background-color: #FAF3E0;
        }
        footer {
            background-color: #5A4637;
        }
        footer p {
            color: #FAF3E0;
        }
        .display-4 {
            font-family: 'WindSong', cursive;
        }
        .lead {
            font-family: 'Fraunces', serif;
        }
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e6d5b8;">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: #8b5e34; font-weight: bold;">Bellarobba</a>
            <a class="navbar-brand-center" href="nuestra_historia.php" style="color: #8b5e34;">Nuestra Historia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html" style="color: #8b5e34;">Vendedores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder ">BellaRobba</h1>
                <p class="lead fw-normal text-white-50 mb-0">In Tua Vitta</p>
            </div>
        </div>
    </header>
    
    <!-- Product Buttons -->
    <div class="container text-center my-4">
        <button class="btn btn-petshop" type="submit">
            <a href="naila.php" style="text-decoration: none; color: inherit;">Naila</a>
        </button>
        <button class="btn btn-petshop" type="submit">
            <a href="collie.php" style="text-decoration: none; color: inherit;">Collie</a>
        </button>
        <button class="btn btn-petshop" type="submit">
            <a href="angora.php" style="text-decoration: none; color: inherit;">Angora</a>
        </button>
        <button class="btn btn-petshop" type="submit">
            <a href="gran_danes.php" style="text-decoration: none; color: inherit;">Gran Danes</a>
        </button>
    </div>
    
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $conexion = mysqli_connect("sql208.infinityfree.com", "if0_37011039", "deseo444");
                mysqli_select_db($conexion, "if0_37011039_tienda");
                $consulta = 'SELECT * FROM ropa';
                $datos = mysqli_query($conexion, $consulta);
                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['marca']) ?></h5>
                                    <h2>$<?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a href="productos.php?id=<?php echo $reg['id'];?>">
                                        <button class="btn btn-petshop" type="button">Ver producto</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    <a href="https://www.instagram.com/bellarobba.pets" target="_blank" class="mx-3" style="color: #FAF3E0;">
                        <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="https://www.instagram.com/bellarobba_16" target="_blank" class="mx-3" style="color: #FAF3E0;">
                        <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="mailto:bellarobba44@gmail.com" class="mx-3" style="color: #FAF3E0;">
                        <i class="bi bi-envelope" style="font-size: 1.5rem;"></i>
                    </a>
                </div>
                <p class="m-0 text-center text-white">&copy; Bellarobba 2024</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
