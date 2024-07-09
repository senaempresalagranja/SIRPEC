<?php 
$tipo=$_POST["tipo"];
// $id=$_POST["id"];
$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT producto.idProducto, producto.nombre, producto.idTipoProducto, producto.Cantidad FROM producto WHERE producto.idTipoProducto='$tipo'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) { 
	echo "<select name='' onchange='consultarProductos()' class='form-control' id='id'>";
	echo "	<option value='Selecciona'>Selecciona</option>";

	while ($fila=mysqli_fetch_row($resource)) {

		echo "<option name='' id='' value='$fila[0]'>$fila[1]</option>";
	}

	 echo "</select>";
}
?>