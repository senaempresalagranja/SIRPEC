<?php 

$hora_consulta=$_POST["hora_consulta"];
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `cosecha` INNER JOIN siembra_estanque ON cosecha.idSiembra_Estanque=siembra_estanque.idSiembra_Estanque WHERE `idCosecha`='$hora_consulta'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>

	var siembra=document.getElementById('siembra').value='$fila[1]';
	var fecha=document.getElementById('fecha').value='$fila[2]';
	var hora=document.getElementById('hora').value='$fila[3]';
	var cantidad=document.getElementById('cantidad').value='$fila[4]';
	var peso=document.getElementById('peso').value='$fila[5]';
	var evicerado=document.getElementById('evicerado').value='$fila[6]';
	var observacion=document.getElementById('observacion').value='$fila[7]';
	var estanque=document.getElementById('estanque').value='$fila[10]';



</script>";



 ?>