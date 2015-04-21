<?php

if ($_POST["usuario"]=="root" && $_POST["contrasena"]=="sesion"){
session_start();

$_SESSION["autenticado"]= "SI";
header ("Location: datos.html");
}else {

header("Location: inicio.php?errorusuario=si");
}
?>