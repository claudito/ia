<?php 

include('configuracion.php');
session_start();

if (!isset($_SESSION[KEY.USUARIO]))
 {
	include('templates/acceso.php');
 }
 else
 {
   include('templates/home.php');
 }


 ?>