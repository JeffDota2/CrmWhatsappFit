<?php 

include 'conexion.php';
include 'indexusuario.html';

if (isset($_REQUEST['agregar'])) {
	
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$consulta="INSERT INTO inicio (usuario,pass) VALUES ('$usuario',MD5('$pass'))";

$ejecutar=mysqli_query($conexion,$consulta);

if ($ejecutar) {


echo '<script type="text/javascript">
alertify
  .alert("Usuario Agregado Correctamente", function(){
    alertify.message("Bienvenido");
  });

   </script>';
}else{

	'<script type="text/javascript">
alertify
  .alert("Error de Registro", function(){
    alertify.message("Error");
  });

   </script>';
}
}
?>