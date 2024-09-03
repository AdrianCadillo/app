<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiacal</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-2">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mx-auto">
                <div class="card border border-primary">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Signo Zodiacal</h4>
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

                        <form action="../logica/logicaController.php?accion=zodiacal" method="post" id="form_zodiacal">
                            <input type="date" class="form-control" name="fecha_nac">
                        </form>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" onclick="document.getElementById('form_zodiacal').submit()">Obtener</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>