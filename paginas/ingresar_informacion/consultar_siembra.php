<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$id_siembra=$_POST["id_siembra"];

$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT * FROM siembra where idSiembra='$id_siembra'";

$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>



var especie=document.getElementById('especie').value='$fila[1]';

var finca=document.getElementById('finca').value='$fila[2]';

var estanque=document.getElementById('estanque').value='$fila[3]';


var lote=document.getElementById('lote').value='$fila[4]';
var cantidad_alevines=document.getElementById('cantidad_alevines').value='$fila[5]';
var densidad=document.getElementById('densidad').value='$fila[6]';
var biomasa=document.getElementById('biomasa').value='$fila[7]';
var fecha=document.getElementById('fecha').value='$fila[8]';
var hora=document.getElementById('hora').value='$fila[9]';
var peso=document.getElementById('peso').value='$fila[10]';
var observaciones=document.getElementById('observaciones').value='$fila[11]';

</script>";


 ?>
