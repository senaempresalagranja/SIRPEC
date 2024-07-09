<?php 


$id_inventario=$_POST["id_inventario"];
$producto=$_POST["producto"];
$novedad=$_POST["novedad"];
$cantidad=$_POST["cantidad"];
$Fecha=$_POST["Fecha"];
$Observacion=$_POST["Observacion"];


							$loca="localhost";
							$usuario="root";
							$contra="";
							$base="sirpec";




							$conexion=mysqli_connect($loca,$usuario,$contra,$base);
							$query="SELECT `idInventario`, producto.nombre, tipoproducto.nombre, `tipoNovedad`, inventario.cantidad as cantidad_novedad, producto.Cantidad as cantidad_producto, `fecha`, `observacion` FROM `inventario` INNER JOIN producto ON inventario.idProducto=producto.idProducto INNER JOIN tipoproducto ON producto.idProducto=tipoproducto.idTipoProducto WHERE inventario.idInventario=$id_inventario";
							$resource=mysqli_query($conexion,$query);

							$fila=mysqli_fetch_row($resource);

							$cantidad_actual=$fila[5];
							$cantidad_registro=$fila[4];

							if ($novedad=="Entrada") {
								
$cantidad_anterior=$cantidad_actual-$cantidad_registro;

if ($fila[2]="ALIMENTO") {
$cantidad=$cantidad*40;
}

$cantidad=$cantidad+$cantidad_anterior;

							$query="UPDATE `inventario` SET `idProducto`=$producto,`tipoNovedad`='$novedad',`cantidad`=$cantidad,`fecha`='$Fecha',`observacion`='$Observacion' WHERE inventario.idInventario=$id_inventario";
							$resource=mysqli_query($conexion,$query);

							$query="UPDATE `producto` SET `Cantidad`=$cantidad WHERE `idProducto`=$producto";
							$resource1=mysqli_query($conexion,$query);

							if ($resource==true && $resource1==true) {
								echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
							}else{
								echo "Error en la Actualizacion";
							}





							}else{
$cantidad_anterior=$cantidad_actual+$cantidad_registro;

if ($fila[2]="ALIMENTO") {
$cantidad=$cantidad*40;
}

// $cantidad=$cantidad-$cantidad_anterior;
if ($cantidad>$cantidad_anterior) {

	echo "<script>

swal('Advertencia','no se pueden sacar $cantidad Kg por que solo hay $cantidad_anterior Kg de $fila[1]','warning')
	</script>";
}else{


$cantidad=$cantidad_anterior-$cantidad;

			$query="UPDATE `inventario` SET `idProducto`=$producto,`tipoNovedad`='$novedad',`cantidad`=$cantidad,`fecha`='$Fecha',`observacion`='$Observacion' WHERE inventario.idInventario=$id_inventario";
							$resource=mysqli_query($conexion,$query);

							$query="UPDATE `producto` SET `Cantidad`=$cantidad WHERE `idProducto`=$producto";
							$resource1=mysqli_query($conexion,$query);

							if ($resource==true && $resource1==true) {
								echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
							}else{
								echo "Error en la Actualizacion";
							}

}
				

							}
 ?>