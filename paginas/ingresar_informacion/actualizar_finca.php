<?php 

$id_finca=$_POST["id_finca"];
$tamaño=$_POST["tamaño"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];




$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE finca SET nombreFinca='$nombre', Telefono='$telefono', Tamano='$tamaño' WHERE idFinca=$id_finca";
$resource=mysqli_query($conexion,$query);
if ($resource==true) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{

	echo "Actualizacion Fallida";
}

 ?>