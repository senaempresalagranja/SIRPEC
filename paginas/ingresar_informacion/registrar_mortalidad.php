<?php 
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$siembra=$_POST["siembra"];
$fecha=$_POST["fecha"];
$Observacion=$_POST["Observacion"];
$Cantidad=$_POST["Cantidad"];




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM siembra";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($Cantidad>$fila[4]) {

	echo "<script>

swal('Error','no se puede registrar $Cantidad peces porque solo hay $fila[4]','warning')
	</script>";
}else{

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="INSERT INTO `mortalidad`( `idSiembra`, `fecha`, `Cantidad`, `observacion`) VALUES ($siembra,'$fecha',$Cantidad,'$Observacion')";
$resource=mysqli_query($conexion,$query);


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM siembra";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$cantidad_actual=$fila[4];

$Cantidad=$cantidad_actual-$Cantidad;



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `siembra` SET `cantidAlevino`=$Cantidad WHERE idSiembra='$siembra'";
$resource1=mysqli_query($conexion,$query);



if ($resource==true && $resource1==true) {
	echo "<script>

swal('Exitoso','Registro Ingresado','success')
	</script>";
}else{
echo "Registro no Exitoso";

}	

}


 ?>
