<?php 


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$nombre=$_POST["nombre"];
$nombre_cientifico=$_POST["nombre_cientifico"];



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `especie` WHERE nombreComun='$nombre'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

if ($fila==true) {
	echo "<script>

swal('Error','$nombre ya existe','warning')
	</script>";
	
}else{
$query="INSERT INTO `especie`(`nombreCientifico`, `nombreComun`) VALUES ('$nombre_cientifico','$nombre')";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
echo "<script>

swal('Exitoso','Registro Insertado','success')
	</script>";
}else{
echo "registro malo";

}

}



 ?>