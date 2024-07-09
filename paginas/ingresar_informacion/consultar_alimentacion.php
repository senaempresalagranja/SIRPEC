<?php 


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$siembra2=$_POST["siembra2"];



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `alimentacion` WHERE idAlimentacion=$siembra2";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
echo "<script>
	var siembra=document.getElementById('siembra').value='$fila[1]';
	var producto=document.getElementById('producto').value='$fila[2]';
	var cantidad=document.getElementById('cantidad').value='$fila[3]';
	var fecha=document.getElementById('fecha').value='$fila[4]';
	var hora=document.getElementById('hora').value='$fila[5]';
	var Observacion=document.getElementById('Observacion').value='$fila[6]';
</script>";


 ?>