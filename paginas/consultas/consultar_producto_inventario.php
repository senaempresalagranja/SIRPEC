<?php 
$novedad=$_POST["novedad"];

							echo "<select name='id'  style='text-transform:uppercase' onchange='consulta_automatica()' id='producto' class='form-control'>	
							<option value='Seleccionado'>Seleccionado</option>";
							
$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT `idInventario`,producto.idProducto, producto.idTipoProducto,producto.nombre, `tipoNovedad`,inventario.cantidad, `fecha`, `observacion` FROM `inventario` INNER JOIN producto ON inventario.idProducto=producto.idProducto  WHERE `tipoNovedad`='$novedad' GROUP BY producto.idProducto";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);

if ($filas>0) {

while ($fila=mysqli_fetch_row($resource)) {
	$id=$fila[1];
	$nombre=$fila[3];
	echo "<option value='$id'> $nombre</option>";
 }
}
	
echo "</select>";


 ?>