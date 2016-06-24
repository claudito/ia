<?php 


class Acceso{

protected $user;
protected $pass;

function __construct($user,$pass)  
{

$this->user  = addslashes($user);
$this->pass  = addslashes($pass); 

}


function Login()
{
$db       = new Conexion();
$query    =  "SELECT * FROM usuarios WHERE user='$this->user' 
  AND pass='$this->pass'";
$result   = $db->query($query);
$numfilas = $result->num_rows;
$dato     = mysqli_fetch_array($result);
if ($numfilas>0) 
{
	session_start();
	$_SESSION[KEY.USUARIO]   = $dato['idusuarios'];
	$_SESSION[KEY.NOMBRES]   = $dato['nombres'];
	$_SESSION[KEY.APELLIDOS] = $dato['apellidos'];
  
  header('Location: /'.PATH.'/');	
}
else
{
  header('Location: /'.PATH.'/');
}


}


function Logout()
{
session_start();
if (!isset($_SESSION[KEY.USUARIO])) 
{
  header('Location: /'.PATH.'/');
}
else
{

unset($_SESSION[KEY.USUARIO]);
unset($_SESSION[KEY.NOMBRES]);
unset($_SESSION[KEY.APELLIDOS]);
header('Location: /'.PATH.'/');

}

}


}


 ?>