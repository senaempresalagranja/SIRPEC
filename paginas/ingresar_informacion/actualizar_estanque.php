<?php 

$id_estanque=$_POST["id_estanque"];
$finca=$_POST["finca"];
$numero=$_POST["numero"];
$espejo=$_POST["espejo"];
$profundidad=$_POST["profundidad"];
$volumen=$_POST["volumen"];
$Observaciones=$_POST["Observaciones"];



$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `estanque` SET `idEstanque`='$id_estanque',`idFinca`='$finca',`numeroEstanque`='$numero',`totEspejoAgua`='$espejo',`profundPromedio`='$profundidad',`volumAgua`='$volumen',`observacion`='$Observaciones' WHERE idEstanque='$id_estanque'";

$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	
echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";

}else{

	echo "Actualizacion no exitoso";
}



	




 ?>