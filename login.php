﻿<?php


$usuario1=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
//$salt='AZC·$%9742#¬~€~¬~#bsg35679#~€¬$)%1243';
//$contraseña=password_hash($salt .$contraseña, PASSWORD_DEFAULT,["cost"=> 12]);
//echo "$contraseña";

if ($usuario1=="Consulta") {
	
	echo "<script>


	$('#formualrio').submit();

	

	</script>";

}else{

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

// echo "<span class='help-block'>$usuario</span";

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM  usuario WHERE usuario='$usuario1'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);



// AQUI ABAJO ES PARA DESENCRIPTAR LA CONTRASEÑA
$salt='AZC·$%9742#¬~€~¬~#bsg35679#~€¬$)%1243';
$resource1=password_verify($salt . $contraseña, $fila[3]);

if ($resource1==true) {



	echo "<script>


	$('#formualrio').submit();



	</script>";


}else{

	echo "<script>


	alert('Usuario o Contraseña Invalidos')



	</script>";

}


}


?>