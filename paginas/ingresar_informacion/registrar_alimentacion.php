<?php 


$siembra=$_POST["siembra"];
$producto=$_POST["producto"];
$cantidad=$_POST["cantidad"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$Observacion=$_POST["Observacion"];


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT * FROM producto where idProducto='$producto'";
$resource2=mysqli_query($conexion, $query);
$cantidad_producto=mysqli_fetch_row($resource2);



if ($cantidad_producto[4]<$cantidad) {

	echo "<script>

swal('Advertencia','no se puede sacar $cantidad de $cantidad_producto[2] porque solo hay $cantidad_producto[4]','warning')
	</script>";



}else{

$query="SELECT * FROM producto where idProducto='$producto'";
$resource3=mysqli_query($conexion, $query);
$cantidad_producto=mysqli_fetch_row($resource3);
$cantidad_producto=$cantidad_producto[4]-$cantidad;



$query="INSERT INTO alimentacion( idSiembra, idProducto, cantAlimento, fecha, hora, obseracion) VALUES ($siembra,$producto,$cantidad,'$fecha','$hora','$Observacion')";
$resource=mysqli_query($conexion, $query);

$query="UPDATE `producto` SET `Cantidad`=$cantidad_producto WHERE idProducto='$producto'";
$resource4=mysqli_query($conexion, $query);






if ($resource==true && $resource4==true) {
	echo "<script>

swal('Exitoso','Registro Ingresado','success')
	</script>";
}else{

	echo "fallo";
}

}





?>