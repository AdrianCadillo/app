<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-primary navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ejercicio1.php">Ejercicio 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container my-2">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mx-auto">
                <div class="card border border-primary">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Número de la suerte</h4>
                    </div>

                    <div class="card-body">
                        <?php
                        if (isset($_SESSION["error"])):
                        ?>
                            <div class="alert alert-danger"><?php echo $_SESSION["error"]; ?></div>
                        <?php unset($_SESSION["error"]);
                        endif; ?>

                        <?php
                        if (isset($_SESSION["success"])):
                        ?>
                            <div class="alert alert-success"><?php echo $_SESSION["success"]; ?></div>
                        <?php unset($_SESSION["success"]);
                        endif; ?>
                        <form action="../logica/logicaController.php?accion=ejercicio2" method="post" id="form_num_suerte">
                            <input type="date" class="form-control" name="fecha">
                        </form>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-danger" onclick="document.getElementById('form_num_suerte').submit()">Obtener</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>