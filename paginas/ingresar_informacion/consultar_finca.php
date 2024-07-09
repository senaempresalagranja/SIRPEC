<?php 

$nombre1=$_POST["nombre1"];



$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM finca WHERE nombreFinca='$nombre1'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>
var nombre1=document.getElementById('nombre1').value='';
var nombre=document.getElementById('nombre').value='$fila[1]';
var telefono=document.getElementById('telefono').value='$fila[2]';
var tamaño=document.getElementById('tamaño').value='$fila[3]';
var id_finca=$fila[0];


</script>

";

?>