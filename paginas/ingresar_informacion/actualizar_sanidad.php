
<?php 


$id_sanidad_consulta=$_POST["id_sanidad_consulta"];
$producto=$_POST["producto"];
$cantidad=$_POST["cantidad"];
$fecha=$_POST["fecha"];
$observacion=$_POST["observacion"];


		$loca="localhost";
		       $usuario="root";
		       $contra="";
		       $base="sirpec";


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `sanidad` SET  `idProducto`=$producto,`dosis`=$cantidad,`fecha`='$fecha',`observacion`='$observacion' WHERE idSanidad=$id_sanidad_consulta";
$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "Actualizacion Exitosa";
}else{

	echo "Error en la actualiacion";
}


 ?>