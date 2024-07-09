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
$id_hora=$_POST["id_hora"];


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `muestreo` SET `idSiembra`=$siembra,`hora`='$hora',`fecha`='$Fecha',`numerPeces`=$Numero,`pesoPromedio`=$Peso,`unidadMedida`=$Unidad_medida,`observacion`='$Observacion' WHERE idMuestreo='$id_hora'";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{
	echo "Actualizacion no Exitoso";
}





 ?>