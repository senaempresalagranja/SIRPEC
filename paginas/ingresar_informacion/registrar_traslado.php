<?php 



$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


$siembra=$_POST["siembra"];
$estanque_traslado=$_POST["estanque_traslado"];
$numero_peces=$_POST["numero_peces"];
$peso=$_POST["peso"];
$tamaño=$_POST["tamaño"];
$fecha=$_POST["fecha"];
$observacion=$_POST["observacion"];

$estanque=$_POST["estanque"];

echo "<script>

swal('Advertencia','$estanque_traslado','success')
	</script>";

if ($estanque==$estanque_traslado) {
echo "<script>

swal('Error','No se puede trasladar al mismo estanque','warning')
	</script>";
}else{



$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT * FROM `traslados` WHERE  idSiembra=$siembra AND idEstanque=$estanque_traslado AND fecha='$fecha'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==True) {
	echo "<script>

swal('Error','Registro ya existe','warning')
	</script>";
}else{



$query="SELECT * FROM siembra WHERE cantidAlevino-$numero_peces<0 AND  idSiembra=$siembra";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==true) {
	echo "<script>

swal('Error','excede el numero de peces','warning')
	</script>";
}else{

$query="INSERT INTO `traslados`( `idSiembra`, `idEstanque`, `numerPece`, `peso`, `tamano`, `fecha`, `observacion`) VALUES ($siembra,$estanque_traslado,$numero_peces,$peso,$tamaño,'$fecha','$observacion')";
$resource=mysqli_query($conexion,$query);




$query1="INSERT INTO `siembra_estanque`(`idSiembra`, `idEstanque`) VALUES ($siembra,$estanque_traslado)";
$resource1=mysqli_query($conexion,$query1);


if ($resource==true && $resource1==true) {

echo "<script>

swal('Exitoso','Registro Ingresado','success')
	</script>";
}else{

	echo "no";
}
}
	
}

}
 ?>