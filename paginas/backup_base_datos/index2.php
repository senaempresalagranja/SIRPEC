<?php 

require '../conexion_login/inicio_sesion.php';

include './Connet.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../css/iconos.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel='stylesheet prefetch' href='../../iconn/css/font-awesome.min.css'>
<link rel="stylesheet" href="../../iconn/css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="../../img/sirpec.ico" />

<link rel="stylesheet" type="text/css" href="../../css/normalize.css"/>         
<link rel="stylesheet" type="text/css" href=".././css/iconos.css"/>
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<script src="../../js/modernizr.custom.js"></script>     
<title>Copia Seguridad</title> 
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
							<li><a class="icon icon-table" href="../simulador_sirpec/simulador.php">  Simulador</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-search" href="#">   Consulta</a>
								<div class="mp-level">
									<h2 class="icon icon-search">  Consulta</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-books" href="../consultas/buscar_cosecha.php">  Cosecha</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_especie.php">  Especie</a></li>
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
							<li><a class="icon icon-switch" href="../conexion_login/cerrar_sesion.php" >Cerrar Sesion</a></li>
						</ul>
							
					</div>

				</nav>
				<!-- /mp-menu -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- ============================================================================== -->
		<h1 class="help-block text-center ">Copia De Seguridad</h1>
	</div>
				
<div class="container">
	<br>
	<br>
	<br>
	<br>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<h2 class=" icon icon-stack text-center titulo1"> Copia De Base De Datos Sirpec</h2><h1 ><a href="#" class=" icon-download2 icono_backup text-center" onclick="backup()" title='Realizar Backup'></a> </h1>
</div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contenedor">
    
    
  </div>
<div class="row">
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
			
		




	</div>

</div>
<div class="row">
  

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<br>
<h2 class=" icon icon-stack text-center titulo1">  Restaurar Copia De Seguridad</h2>

</div>
	
</div>


<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		
<h3 class="icon icon-calendar">  Seleccione Copia Para Restaurar</h3>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contenedor2">
		<h3 class="icon   icon-spinner6" id="espere">  Por favor Espere Restaurando Backup</h3>


	</div>
</div>

<div class="row">
	<div class="col-md-4col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<select name="restaurar" id="restaurar" class="form-control">
			<option value="Selecciona" >Selecciona</option>
			<?php
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
	</div>
	<div class="col-md-2">
		<h2 title='Restaurar Base de datos'><a href="#" onclick="restaurar()" class="icon-upload2 icono_backup  restaurar"></a></h2>
		
	</div>


</div>
	


	


	</div>
</body>

<script>






var espere=document.getElementById('espere').style.display='none';
	
function restaurar() {

		var restaurar=document.getElementById('restaurar').value;
	if (restaurar=="Selecciona") {
swal("ERROR", "Seleccione Copia Para Restaurar", "error")


	}else{
var restaurar=document.getElementById('restaurar').value;
var espere=document.getElementById('espere').style.display='block';
$("#contenedor2").load("Restore.php",{restaurar:restaurar});
		
	}




}

function backup(){


$("#contenedor").load('Backup.php');
}

</script>

</body>
<style>
.restaurar{

	position: relative;
	top: -11px;
}


.icono_backup{

color: black;
}

.icono_backup:hover{

	text-decoration: none;
	color: black;
}

.icono_menu{
	position: relative;
	z-index: 2;
	/*left: -100%;*/
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
     overflow: hidden;
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
	color:#000;
}
</style>
<script>
         $(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});

         
       </script>

		<script src="../../js/classie.js"></script>
		<script src="../../js/mlpushmenu.js"></script>
		<script src="../../js/jquery.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );




		function consultar (nombre) {
			var nombre1=document.getElementById('nombre1').value;
			$("#contenedor").load("consultar_finca.php", {nombre1:nombre1,jo:jo});

		}

		function Actualizar () {
		if (validar_nombre()==true && validar_telefono()==true && validar_tamaño()==true) {





				var tamaño=document.getElementById("tamaño").value;
				var nombre=document.getElementById("nombre").value;
				var telefono=document.getElementById("telefono").value;
				// var fax=document.getElementById("fax").value;
				nombre=nombre.toUpperCase();

				$("#contenedor").load("actualizar_finca.php", {nombre:nombre,tamaño:tamaño,telefono:telefono});
			}
			else{

				alert( "Algunos Campos estan Vacios o Incorrectos" )
			}





		}

			function nuevo_registro() {
	var tamaño=document.getElementById("tamaño").value='';
				var nombre=document.getElementById("nombre").value='';
				var telefono=document.getElementById("telefono").value='';
				// var fax=document.getElementById("fax").value='';
			var nombre=document.getElementById("nombre").focus();
}
		$(document).on("ready", inicio);

		function enviar () {
			if (validar_nombre()==true && validar_telefono()==true && validar_tamaño()==true) {
				var tamaño=document.getElementById("tamaño").value;
				var nombre=document.getElementById("nombre").value;
				var telefono=document.getElementById("telefono").value;
				// var fax=document.getElementById("fax").value;
				nombre=nombre.toUpperCase();
				$("#contenedor").load("finca.php", {nombre:nombre, telefono:telefono,tamaño:tamaño})

			}
			else{

				alert( "Algunos Campos estan Vacios o Incorrectos" )
			}


		}



		function inicio () {
			$("#nombre").keyup(validar_nombre);
			// $("#fax").keyup(validar_fax);
			$("#telefono").keyup(validar_telefono);
			$("#tamaño").keyup(validar_tamaño);
			var nombre=document.getElementById("nombre").focus();
		}



		function validar_nombre() {
			var nombre=document.getElementById('nombre').value;
			if(nombre==null  || nombre.length==0 || /^\s+$/.test(nombre)){
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-error  has-feedback");
				$("#nombre").parent().children("span").text("").show();
				$("#nombre").parent().append('<span id="icono_texto" class="form-control-feedback"></span>');
				return false;

			}else if (isNaN(nombre)==false) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-error has-feedback");
				$("#nombre").parent().children("span").text("").show();
				$("#nombre").parent().append('<span id="icono_texto" class="form-control-feedback"></span>');
				return false;

			}else if (nombre.length>50) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-error has-feedback");
				$("#nombre").parent().children("span").text("").show();
				$("#nombre").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else{


				$("#nombre").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-success has-feedback");
				$("#nombre").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}


		}


		// function validar_fax () {

		// 	var fax=parseFloat(document.getElementById('fax').value);

		// 	if(fax==null  || fax.length==0 || /^\s+$/.test(fax) || fax<0){

		// 		$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
		// 		$("#elemento_fax").attr("class", "form-group has-error  has-feedback");
		// 		$("#fax").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

		// 		return false;

		// 	}
		// 	else if (isNaN(fax)) {
		// 		$("#fax").parent().children("span").text("").show();
		// 		$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
		// 		$("#elemento_fax").attr("class", "form-group has-error has-feedback");
		// 		$("#fax").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
		// 		return false;

		// 	}else {

		// 		$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
		// 		$("#elemento_fax").attr("class", "form-group has-success has-feedback");
		// 		$("#fax").parent().children("span").text("").show();
		// 		$("#fax").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

		// 		return true;
		// 	}

		// }

		function validar_telefono () {

			var telefono=parseFloat(document.getElementById('telefono').value);

			if(telefono==null  || telefono.length==0 || /^\s+$/.test(telefono) || telefono<0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-error  has-feedback");
				$("#telefono").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(telefono)) {
				$("#telefono").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-error has-feedback");
				$("#telefono").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-success has-feedback");
				$("#telefono").parent().children("span").text("").show();
				$("#telefono").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

		}



				function validar_tamaño () {

			var tamaño=parseFloat(document.getElementById('tamaño').value);

			if(tamaño==null  || tamaño.length==0 || /^\s+$/.test(tamaño) || tamaño<=0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-error  has-feedback");
				$("#tamaño").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(tamaño)) {
				$("#tamaño").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-error has-feedback");
				$("#tamaño").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-success has-feedback");
				$("#tamaño").parent().children("span").text("").show();
				$("#tamaño").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

		}
		</script>
</html>