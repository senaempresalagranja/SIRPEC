<?php 
							$loca="localhost";
							$usuario="root";
							$contra="";
							$base="sirpec";
$producto=$_POST["producto"];
$novedad=$_POST["novedad"];
$producto=$_POST["producto"];
$cantidad=$_POST["cantidad"];
$Fecha=$_POST["Fecha"];
$Observacion=$_POST["Observacion"];

							$conexion=mysqli_connect($loca,$usuario,$contra,$base);
if ($novedad=="Entrada") {

$query="SELECT `idProducto`, tipoproducto.nombre, producto.nombre, `descripcion`, `Cantidad` FROM `producto` INNER JOIN tipoproducto ON producto.idTipoProducto=tipoproducto.idTipoProducto WHERE producto.idProducto=$producto";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$tipo_producto=$fila[1];
$nombre_producto=$fila[2];
if ($tipo_producto=="ALIMENTO") {

$cantidad=$cantidad*40;
$cantidad_actual=$fila[4];

$cantidad=$cantidad+$cantidad_actual;


}else if ($tipo_producto=="MEDICINA"){


}


	$query="INSERT INTO `inventario`( `idProducto`, `tipoNovedad`, `cantidad`, `fecha`, `observacion`) VALUES ($producto,'$novedad',$cantidad,'$Fecha','$Observacion')";

							$resource=mysqli_query($conexion,$query);

							$query1="UPDATE `producto` SET `Cantidad`=$cantidad WHERE idProducto=$producto";
							$resource1=mysqli_query($conexion,$query1);



							if ($resource==true &&  $resource1==true) {

								echo "<script>

swal('Exitoso','Quedan $cantidad de $nombre_producto','success')
	</script>";
								
							}else{


								echo "Registro no Exitoso";
							}

}else{

$query="SELECT `idProducto`, tipoproducto.nombre, producto.nombre, `descripcion`, `Cantidad` FROM `producto` INNER JOIN tipoproducto ON producto.idTipoProducto=tipoproducto.idTipoProducto WHERE producto.idProducto=$producto";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$tipo_producto=$fila[1];
$nombre_producto=$fila[2];
if ($tipo_producto=="ALIMENTO") {

$cantidad_actual=$fila[4];




}else if ($tipo_producto=="MEDICINA"){


}


if ($cantidad_actual<$cantidad) {

	echo "<script>

swal('Error','no puede sacar $cantidad de $fila[2] solo hay $cantidad_actual','warning')
	</script>";
	
}else{

$cantidad=$cantidad_actual-$cantidad;

	$query="INSERT INTO `inventario`( `idProducto`, `tipoNovedad`, `cantidad`, `fecha`, `observacion`) VALUES ($producto,'$novedad',$cantidad,'$Fecha','$Observacion')";

							$resource=mysqli_query($conexion,$query);

							$query1="UPDATE `producto` SET `Cantidad`=$cantidad WHERE idProducto=$producto";
							$resource1=mysqli_query($conexion,$query1);



							if ($resource==true &&  $resource1==true) {
								echo "<script>

swal('Exitoso','Quedan $cantidad de $nombre_producto','success')
	</script>";
							
							}else{


								echo "Registro no Exitoso";
							}


}




}


 ?>