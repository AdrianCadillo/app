<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub cadena</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body class="p-4">
    <div class="bg-white px-2 py-4 rounded-lg shadow-md w-full md:w-1/3 mx-auto">
        <h1 class="mb-2 font-bold">Sub cadena</h1>

        <form action="../logica/logicaController.php?accion=subcadena_ejer1" method="post">
            <?php
            if (isset($_SESSION["errores"])):
            ?>
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <?php foreach ($_SESSION["errores"] as $error): ?>
                        <ul class="list-disc list-outside">
                            <li><?php echo $error; ?></li>
                        </ul>
                <?php endforeach; ?>
            </div>
            <?php unset($_SESSION["errores"]);
            endif; ?>

            <?php
            if (isset($_SESSION["success"])):
            ?>
                <div class="alert alert-success"><?php echo $_SESSION["success"]; ?></div>
            <?php unset($_SESSION["success"]);
            endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                <input type="text" class="px-2 py-3 rounded-md border border-spacing-3
       w-full focus:outline-none focus:ring-1 focus:ring-blue-400
       placeholder:font-semibold mb-3 col-span-5 md:col-span-3"
                    placeholder="Ingresar Texto..." name="texto">

                <input type="text" class="px-2 py-3 rounded-md border border-spacing-3
       w-full focus:outline-none focus:ring-1 focus:ring-blue-400
       placeholder:font-semibold mb-2 col-span-5 md:col-span-1"
                    placeholder="Inicio..." name="inicio">

                <input type="text" class="px-2 py-3 rounded-md border border-spacing-3
       w-full focus:outline-none focus:ring-1 focus:ring-blue-400
       placeholder:font-semibold mb-2 col-span-5 md:col-span-1"
                    placeholder="Final..." name="final">
            </div>

            <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Obetener</button>
        </form>
    </div>
</body>

</html>