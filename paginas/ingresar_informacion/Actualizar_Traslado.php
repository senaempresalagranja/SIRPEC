<?php 

$id_traslado=$_POST["id_traslado"];
$siembra=$_POST["siembra"];
$estanque=$_POST["estanque"];
$estanque_traslado=$_POST["estanque_traslado"];
$numero_peces=$_POST["numero_peces"];
$peso=$_POST["peso"];
$tamaño=$_POST["tamaño"];
$fecha=$_POST["fecha"];
$observacion=$_POST["observacion"];

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `traslados` SET `idSiembra`=$siembra,`idEstanque`=$estanque_traslado,`numerPece`=$numero_peces,`peso`=$peso,`tamano`=$tamaño,`fecha`='$fecha',`observacion`='$observacion' WHERE idTraslado=$id_traslado";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "Actualizacion Exitosa";
}else{

echo "Error en la Actualizacion";
}
 ?>
