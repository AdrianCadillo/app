<?php 
session_start();
if(!isset($_SESSION["user"]) and !isset($_COOKIE["user"])){
    header("location:login.php");
    exit;
}else{
    if(isset($_SESSION["user"])){
        $UserConect = $_SESSION["user"];
    }else{
        $UserConect = openssl_decrypt($_COOKIE["user"],"aes-128-cbc","cursophp");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al sistema!
        <?php echo $UserConect; ?>
    </h1>

    <form action="../logica/destroy.php" method="post">
        <button>Cerrar la sesion</button>
    </form>
</body>
</html>