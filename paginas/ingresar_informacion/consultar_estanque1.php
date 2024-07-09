<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$id_estanque=$_POST["id_estanque"];

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM estanque where idEstanque=$id_estanque";
$resource=mysqli_query($conexion,$query);

$fila=mysqli_fetch_row($resource);
echo "<script>

var finca=document.getElementById('finca').value='$fila[1]'
var numero=document.getElementById('numero').value='$fila[2]'
var espejo=document.getElementById('espejo').value='$fila[3]'
var profundidad=document.getElementById('profundidad').value='$fila[4]'
var volumen=document.getElementById('volumen').value='$fila[5]'
var Observaciones=document.getElementById('Observaciones').value='$fila[6]';


</script>";

 ?>