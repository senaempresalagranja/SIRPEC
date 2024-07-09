<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";



$siembra=$_POST["siembra"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$cantidad=$_POST["cantidad"];
$peso=$_POST["peso"];
$evicerado=$_POST["evicerado"];
$observacion=$_POST["observacion"];
$estanque=$_POST["estanque"];
$hora_consulta=$_POST["hora_consulta"];


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `cosecha` SET `idSiembra_Estanque`=$siembra,`fecha`='$fecha',`hora`='$hora',`numeroPeces`=$cantidad,`pesoPezEntero`=$peso,`pesoPezEvicerado`=$evicerado,`observacion`='$observacion' WHERE `idCosecha`=$hora_consulta";
$resource=mysqli_query($conexion,$query);


if ($resource==true ) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{


echo "Actualizacion no Exitosa";
}
 ?>
