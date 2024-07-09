<?php 
$tamaño=$_POST["tamaño"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];





$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT *  FROM finca WHERE nombreFinca='$nombre'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;
if ($fila==true) {
	echo "<script>

swal('Error','Finca Ya Existe','warning')
	</script>";
}else
{




$conexion1=mysqli_connect($loca,$usuario,$contra,$base);
$query1="INSERT INTO finca (nombreFinca,Telefono,  Tamano) VALUES 
('$nombre', $telefono, $tamaño) ";
$resource1=mysqli_query($conexion1,$query1);

if ($resource1==true) {
	echo "<script>

swal('Exitoso','Registro Insertado','success')
	</script>";
}else{
	echo "Registro Fallido";
}

}

 ?>