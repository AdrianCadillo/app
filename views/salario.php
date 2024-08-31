<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body>
    <div class="p-4">
        <div class="border border-spacing-2 shadow-lg bg-white px-2 py-4
         w-1/3 rounded-lg mx-auto">
            <?php if (isset($_SESSION["response"])): ?>
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> <?php  echo $_SESSION["response"]?>.
                </div>
            <?php unset($_SESSION["response"]);endif; ?>
            <h1 class="text-2xl font-bold mb-3">Salario</h1>
        <form action="../logica/salario.php" method="post">
                <input type="text" name="nombre" class="px-2 py-3 border border-blue-400 w-full
          focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-lg placeholder:font-serif mb-2" placeholder="NOMBRES...">

                <input type="text" name="salario" class="px-2 py-3 border border-blue-400 w-full
          focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-lg placeholder:font-serif" placeholder="SALARIO...">

                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargo</label>
                <select id="countries" name="cargo" class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="Ing.de sistemas">Ing.de sistemas</option>
                    <option value="Contador">Contador</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Programador">Programador</option>
                </select>
                <button type="submit" name="calcular" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mx-auto block">Calcular</button>
            </form>
        </div>
    </div>
</body>

</html>