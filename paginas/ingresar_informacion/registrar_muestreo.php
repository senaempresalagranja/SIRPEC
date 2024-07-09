<?php 
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$siembra=$_POST["siembra"];
$hora=$_POST["hora"];
$Fecha=$_POST["Fecha"];
$Numero=$_POST["Numero"];
$Peso=$_POST["Peso"];
$Unidad_medida=$_POST["Unidad_medida"];
$Observacion=$_POST["Observacion"];


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM  muestreo where idSiembra=$siembra AND hora='$Fecha' AND fecha='$Fecha'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==true) {
	echo "<script>

swal('Error','Muestreo Ya Existe','warning')
	</script>";
}else{

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="INSERT INTO `muestreo`( `idSiembra`, `hora`, `fecha`, `numerPeces`, `pesoPromedio`, `unidadMedida`, `observacion`) VALUES (
$siembra,'$hora','$Fecha',$Numero,$Peso,'$Unidad_medida','$Observacion')";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "<script>

swal('Exitoso','Registro Ingresado','success')
	</script>";
}else{
	echo "Registro no Exitoso";
}

}




 ?>