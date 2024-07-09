<?php 


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$id_traslado=$_POST["id_traslado"];

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `traslados` WHERE `idTraslado`='$id_traslado'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
echo "
<script>



		var siembra=document.getElementById('siembra').value='$fila[1]';
	var jojo=document.getElementById('estanque_traslado').value='$fila[2]';
			
		var numero_peces=document.getElementById('numero_peces').value='$fila[3]';
		var peso=document.getElementById('peso').value='$fila[4]';
		var tamaño=document.getElementById('tamaño').value='$fila[5]';
		var fecha=document.getElementById('fecha').value='$fila[6]';
		var observacion=document.getElementById('observacion').value='$fila[7]';



</script>

";






 ?>