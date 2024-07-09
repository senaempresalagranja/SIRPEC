<?php 


$finca=$_POST["finca"];
$numero=$_POST["numero"];
$espejo=$_POST["espejo"];
$volumen=$_POST["volumen"];
$Observaciones=$_POST["Observaciones"];
$profundidad=$_POST["profundidad"];


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `estanque` INNER JOIN finca ON estanque.idFinca=finca.idFinca  WHERE estanque.idFinca=$finca AND numeroEstanque=$numero";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==true) {

	echo "<script>

swal('Error','el estanque $numero ya existe en la finca $fila[8]','warning')
	</script>";

}else{

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="INSERT INTO `estanque`( `idFinca`, `numeroEstanque`, `totEspejoAgua`, `profundPromedio`, `volumAgua`, `observacion`) VALUES ($finca,$numero,$espejo,$profundidad,$volumen,'$Observaciones')";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	
echo "<script>

swal('Exitoso','Registro Insertado','success')
	</script>";
}else{

	echo "registro no exitoso";
}



	
}




 ?>