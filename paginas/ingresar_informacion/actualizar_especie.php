<?php 
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$id_especie=$_POST["id_especie"];
$nombre=$_POST["nombre"];
$nombre_cientifico=$_POST["nombre_cientifico"];


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `especie` SET `nombreCientifico`='$nombre_cientifico',`nombreComun`='$nombre' WHERE idEspecie=$id_especie";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{

	echo "Actualizacion no exitosa";
}

?>