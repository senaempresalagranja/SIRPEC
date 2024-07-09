<?php

 $id_hora=$_POST["id_hora"];
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `muestreo` WHERE idMuestreo='$id_hora'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
echo "<script>


var siembra=document.getElementById('siembra').value='$fila[1]';
var hora=document.getElementById('hora').value='$fila[2]';
var Fecha=document.getElementById('Fecha').value='$fila[3]';
var Numero=document.getElementById('Numero').value='$fila[4]';
var Peso=document.getElementById('Peso').value='$fila[5]';
var Unidad_medida=document.getElementById('Unidad_medida').value='$fila[6]';
var Observacion=document.getElementById('Observacion').value='$fila[7]';


</script>";

 ?>