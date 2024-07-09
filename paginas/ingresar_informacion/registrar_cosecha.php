<?php 

$siembra=$_POST["siembra"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$cantidad=$_POST["cantidad"];
$peso=$_POST["peso"];
$evicerado=$_POST["evicerado"];
$observacion=$_POST["observacion"];
$estanque=$_POST["estanque"];

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `cosecha` INNER JOIN siembra_estanque ON cosecha.idSiembra_Estanque=siembra_estanque.idSiembra_Estanque WHERE idEstanque='$estanque'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

if ($fila==true) {
		echo "<script>

swal('Advertencia','este estanque ya tiene cosecha digitada','warning')
	</script>";
	
}else{

$query="INSERT INTO  `cosecha`(`idSiembra_Estanque`, `fecha`, `hora`, `numeroPeces`, `pesoPezEntero`, `pesoPezEvicerado`, `observacion`)
 VALUES ($siembra,'$fecha','$hora',$cantidad,$peso,$evicerado,'$observacion')";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "<script>

swal('Exitoso','Registro Insertado','success')
	</script>";
}else{


	echo "Fallo en el registro";
}	


}







 ?>