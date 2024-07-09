
			<?php 
		       $loca="localhost";
		       $usuario="root";
		       $contra="";
		       $base="sirpec";


$producto=$_POST["producto"];
$cantidad=$_POST["cantidad"];
$fecha=$_POST["fecha"];
$observacion=$_POST["observacion"];


		       $conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT  `Cantidad`, `nombre` FROM `producto` WHERE `idProducto`=$producto";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila[0]<$cantidad) {
	echo "<script>

swal('Error','no se puede sacar $cantidad unidades de $fila[1] por que solo hay $fila[0]','warning')
	</script>";
	
}else{


       $query="INSERT INTO `sanidad`( `idProducto`, `dosis`, `fecha`, `observacion`) 
		       VALUES ($producto,$cantidad,'$fecha','$observacion')";
		       $resource=mysqli_query($conexion,$query);
$cantidad=$fila[0]-$cantidad;
		              $query="UPDATE `producto` SET `Cantidad`=$cantidad WHERE `idProducto`=$producto";
		       $resource1=mysqli_query($conexion,$query);
		    if ($resource==true && $resource1==true) {
		    	echo "<script>

swal('Exitoso','Registro Ingresado','success')
	</script>";
		    }else{


		    	echo "Erro en el registro";
		    }

}


		

			 ?>