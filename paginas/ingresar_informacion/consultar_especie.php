<?php 
$id_especie=$_POST["id_especie"];


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `especie` WHERE idEspecie=$id_especie";
$resource=mysqli_query($conexion,$query);

$fila=mysqli_fetch_row($resource);

echo "<script>



var nombre=document.getElementById('nombre').value='$fila[2]';
var nombre_cientifico=document.getElementById('nombre_cientifico').value='$fila[1]';
</script>";



 ?>