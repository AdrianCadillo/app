<?php
session_start();
if(isset($_SESSION["user"]) or isset($_COOKIE["user"])){
    header("location:dashboard.php");
    exit;
}
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
         xl:w-1/3 lg:w-1/3 md:w-1/2 w-full rounded-lg mx-auto">
            
            <h1 class="text-2xl font-bold mb-3">Login</h1>
        <form action="../logica/login.php" method="post">
                <input type="text" name="username" class="px-2 py-3 border border-blue-400 w-full
          focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-lg placeholder:font-serif mb-2" placeholder="USERNAME...">

                <input type="text" name="password" class="px-2 py-3 border border-blue-400 w-full
          focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-lg placeholder:font-serif mb-3" placeholder="PASSWORD...">
                
               <label for="remember" class="font-bold">Recordar la sesión
                <input type="checkbox" id="remember" name="remember">
               </label>
                 
                <button type="submit" name="login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mx-auto block">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>