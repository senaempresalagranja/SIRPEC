<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$id_fecha=$_POST["id_fecha"];

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `mortalidad` WHERE idMortalidad=$id_fecha";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>


var siembra=document.getElementById('siembra').value='$fila[1]';
var fecha=document.getElementById('fecha').value='$fila[2]';
var Observacion=document.getElementById('Observacion').value='$fila[4]';
var Cantidad=document.getElementById('Cantidad').value='$fila[3]';

</script>";


 ?>