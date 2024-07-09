<?php 

require '../conexion_login/inicio_sesion.php';

echo "<script>


var Rol='$fila[2]';


</script>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/sirpec.css">

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/iconos.css">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script src="../../js/bootstrap.js"></script>
<script src='../../js/bootstrap.min.js'></script>
<script src="jquery.js"></script>
<script src="../../js/sweetalert.js"></script>

<link rel="stylesheet" href="../../iconn/css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="../../img/sirpec.ico" />
<link rel="stylesheet" type="text/css" href="../../css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="../../css/iconos.css"/>               
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css" />
<script src="../../js/modernizr.custom.js"></script>
<title>Consulta Traslado</title>

</head>
<body>
<div class="uset">
<div class="icl">
<a class="icon icon-user" href="#"><?php echo "$fila[1]"; ?></a>
</div>
</div>

<div class=" header">
	<div class="cuadrito">
		
	</div>
<img src="../../img/img_logo3.png" class="logo" alt="">
				<h1 class=""><a href="#" id="trigger" class="icon icon-menu2 icono_menu"></a></h1>
</div>


	<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<h2 class="icon icon-world">Menu</h2>
						<ul>
						<li><a class="icon icon-home" href="../inicio/index.php">  Inicio</a></li>
						<div id="registrar">
							<li class="icon icon-arrow-left">
								<a class="icon icon-pencil2" href="#">  Registrar Datos</a>
								<div class="mp-level">
									<h2 class="icon icon-pencil2">  Registrar Datos</h2>
									<a class="mp-back " href="#">Atras</a>
									<ul>
										<li class="">
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_finca.php">  Fincas</a>
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_estanque.php">  Estanque</a>
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_especie.php">  Especie</a>
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_siembra.php">  Siembra</a>
			
										</li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-book" href="#">   Produccion</a>
								<div class="mp-level">
									<h2 class="icon icon-book">  Produccion</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_traslado.php">  Traslado</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_alimentacion.php">  Alimentacion</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_muestreo.php">  Muestreo</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_mortalidad.php">  Mortalidad</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_cosecha.php">  Cosecha</a></li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-plus" href="#">   Sanidad</a>
								<div class="mp-level">
									<h2 class="icon icon-plus">  Sanidad</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_sanidad.php">  Tratamiento</a></li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-list" href="#">   Inventario</a>
								<div class="mp-level">
									<h2 class="icon icon-list">  Inventario</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-book" href="../ingresar_informacion/ingresar_insumo.php">  Insumo</a></li>
									</ul>
								</div>
							</li>

							</div>
							<li><a class="icon icon-table" href="../simulador_sirpec/simulador.php">  Simulador</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-search" href="#">   Consulta</a>
								<div class="mp-level">
									<h2 class="icon icon-search">  Consulta</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
									    <li><a class="icon  icon-books" href="../consultas/buscar_alimentacion.php">  Alimentacion</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_cosecha.php">  Cosecha</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_especie.php">  Especie</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_estanque.php">  Estanque</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_finca.php">  Finca</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_inventario.php">  Inventario</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_mortalidad.php">  Mortalidad</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_producto.php">  Producto</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_sanidad.php">  Sanidad</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_siembra.php">  Siembra</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_traslado.php">  Traslado</a></li>
									</ul>
								</div>
							</li>
							<div id="registrar1">
							<li><a class="icon icon-cogs" href="../configuracion/configurar.php">  Configuracion</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-cloud" href="#">   Copia de Seguridad</a>
								<div class="mp-level">
									<h2 class="icon icon-cloud">  Copia de Seguridad</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-book" href="../backup_base_datos/index2.php">  Copia Base Datos</a></li>
									</ul>
								</div>
							</li>
							<li><a class="icon icon-question" href="#">  Ayuda</a></li>
							</div>
							<li><a class="icon icon-switch" href="../conexion_login/cerrar_sesion.php" >Cerrar Sesion</a></li>
						</ul>
							
					</div>
				</nav>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- ============================================================================== -->
		<h1 class="help-block text-center ">Consultar Traslado</h1>
	</div>
		<div class="container">
			<div class="row">
			<!-- <div class="col-md-1"></div> -->
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<div id="elemento_buscar">
							<label for="">Seleccionar Traslado</label>
							<select name="id" onchange="consulta_automatica()" style="text-transform:uppercase" id="id" class="form-control">	
							<option value="Selecciona">Selecciona</option>
							<?php
							$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT * FROM `traslados`";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);

if ($filas>0) {

while ($fila=mysqli_fetch_row($resource)) {
	$id=$fila[0];
	$nombre=$fila[2] . "--" . "$fila[6]";
	echo "<option value='$id' >Estanque $nombre</option>";
 }
}
?>	
</select>
						</div>
					</div>
				</div>
			</div>
	<div id="resultado"></div>
</div>

</body>
<style>
.icono_menu{
	position: relative;
	z-index: 2;
	left: -100%;
	top: -150px;	
	left: 20px;
}
a{
	text-decoration: none;
	color:#fff;
}
a:hover{
	text-decoration: none;
	color: #000;
}

.logo{
	position: relative;
	display: block;
	z-index: 1;
	left: 93%;
	width: 90px	;
	height: 70px;
	top: -70px;
}
	
.uset{
	width: 100%;
	background: #1358BF;
	height: 10px;
	z-index: 0;
}

.icl{
	position: relative;
	max-width: 100px;
	width: 100%;
	background: #1358BF;
	height: 10px;
	left: 630px;
	z-index: 0;
}
	
.header{
	width: 100%;
	background: #1358BF;
	height: 70px;
	z-index: 0;
}

.cuadrito{
	left: 93%;	;
position: relative;
	 width: 92px; 
     height: 70px; 
     border: 2px solid #fff; 
     background: #fff;
     -moz-border-radius: 100px 100px 0 0;
     -webkit-border-radius: 100px 100px 0 0;
     border-radius: 100px 100px 0 0;
}
.iconn{
	font-size: 200%;
}
.negro{
	color:black;
}
.verde{
	color:green;
}
.azul{
	color:blue;
}
</style>

		<script src="../../js/classie.js"></script>
		<script src="../../js/mlpushmenu.js"></script>
		<script src="../../js/jquery.js"></script>
	
<script>

if (Rol=="Consulta") {
var registrar=document.getElementById('registrar').style.display="none";
var registrar1=document.getElementById('registrar1').style.display="none";


}

</script>
	
	<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );


$(document).ready();	

function inicio() {
$("#id").change(consulta_automatica);

}


function consulta_automatica() {
	
	
	var id=document.getElementById("id").value;
	$("#resultado").load("consultar_traslado.php",{id:id})
}
		</script>
</html>
<!-- document.getElementById("myDIV").style.overflow = "scroll"; -->