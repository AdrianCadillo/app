<?php
session_start();
///unset($_SESSION["username"]);

session_destroy();
echo "variable de sesion eliminado";