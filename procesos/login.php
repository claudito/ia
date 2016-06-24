<?php 
include('../configuracion.php');
include('../rutas.php');
include('../includes/clases/Acceso.php');



$acceso  =  new Acceso($_POST['user'],$_POST['pass']);
$acceso -> Login();















 ?>