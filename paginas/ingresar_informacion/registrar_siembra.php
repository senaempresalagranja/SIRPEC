<?php 


$especie=$_POST["especie"];
$finca=$_POST["finca"];
$estanque=$_POST["estanque"];
$lote=$_POST["lote"];
$cantidad_alevines=$_POST["cantidad_alevines"];
$densidad=$_POST["densidad"];
$biomasa=$_POST["biomasa"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$peso=$_POST["peso"];
$observaciones=$_POST["observaciones"];



$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT * FROM siembra where idEstanque='$estanque'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

if ($fila==true) {
	
	echo "<script>

swal('Error','El estanque esta ocupado por otra Siembra','warning')
	</script>";
}else{

$query="INSERT INTO `siembra`(`idEspecie`, `idFinca`, `idEstanque`, `lote`, `cantidAlevino`, `densidad`, `bioMasa`, `fecha`, `hora`, `peso`, `observacion`)


VALUES ($especie, $finca,$estanque,$lote,$cantidad_alevines,$densidad,$biomasa,'$fecha','$hora',$peso,'$observaciones')";

$resource=mysqli_query($conexion,$query);

$query="SELECT MAX(idSiembra) FROM siembra";

$resource1=mysqli_query($conexion,$query);
$id_siembra=mysqli_fetch_row($resource1);


$query="INSERT INTO `siembra_estanque`(`idSiembra`, `idEstanque`) VALUES ($id_siembra[0],$estanque)";

$resource2=mysqli_query($conexion,$query);



if ($resource==true && $resource1 && $resource2==true) {
	echo "<script>

swal('Exitoso','Registro Ingresado','success')
	</script>";
}else{

	echo "error en el registro";
}

}







 ?>