<?php 

include 'conexion.php';
include 'indexlogin.html';

if (isset($_REQUEST['login'])) {
	
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$consulta="SELECT * FROM inicio WHERE usuario='$usuario' and pass=MD5('$pass')  ";

$ejecutar=mysqli_query($conexion,$consulta);

$row=mysqli_fetch_array($ejecutar) or die(mysqli_error($conexion));

if (!$row['usuario']) {

header("location: indexlogin.html");




}else{

  header("location: inicio.html");


}

}


 ?>