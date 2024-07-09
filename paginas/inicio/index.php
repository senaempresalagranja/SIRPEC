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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/iconos.css">
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="../../js/bootstrap.js"></script>
    <script src='../../js/bootstrap.min.js'></script>

    <link rel='stylesheet prefetch' href='../../iconn/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../../iconn/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/sirpec.ico" />
     
    <link type="text/css" rel="stylesheet" href="../../slidd/sheet-slider.min.css"/>

	<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../../css/iconos.css" />
	<link rel="stylesheet" type="text/css" href="../../css/component.css" />
	<link rel="stylesheet" href="../../css/piep.css" type="text/css" media="screen">
	<script src="../../js/modernizr.custom.js"></script>
	<script src="../../js/menu.js" type="text/javascript"></script>
	<title>SIRPEC</title>
</head>
<body>
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
<br>
				<center>
				<h1>Bienvenido: <a class="icon inic icon-user" href="#"><?php echo "$fila[1]"; ?></a></h1>
				</center>
			<br>	

				<div class="sheet-slider">
   <input id="s1" class="sheet" type="radio" name="slide1" checked/>
   <input id="s2" class="sheet" type="radio" name="slide1"/>
   <input id="s3" class="sheet" type="radio" name="slide1"/>
   <input id="s4" class="sheet" type="radio" name="slide1"/>
   <input id="s5" class="sheet" type="radio" name="slide1"/>
   <ul>
   <!--imagenes-->
      <li class="tab">
         <img src="../../slidd/img/slide-img01.jpg" />
         <div>
            <h3></h3>
            <span> <a href="#"></a></span>
         </div>
      </li>
      
      <li class="tab">
         <img src="../../slidd/img/slide-img02.jpg"/>
         <div>
            <h3></h3>
            <span></span>
         </div>
      </li>
      
      <li class="tab">
         <img src="../../slidd/img/slide-img03.jpg"/>
         <div>
            <h3></h3>
            <span></span>
         </div>
      </li>
      
      <li class="tab">
         <img src="../../slidd/img/slide-img04.jpg"/>
         <div>
            <h3></h3>
            <span> <a href="#urlPage"></a></span>
         </div>
      </li>
      <li class="tab">
         <img src="../../slidd/img/slide-img05.jpg"/>
         <div>
            <h3></h3>
            <span></span>
         </div>
      </li> 
   </ul>
   
   <!--botones-->
   <div class="sh-btns">
      <label for="s1"></label>
      <label for="s2"></label>
      <label for="s3"></label>
      <label for="s4"></label>
      <label for="s5"></label>
   </div>
   
   <!--flechas-->
   <div class="sh-arrows">
      <label for="s1"></label>
      <label for="s2"></label>
      <label for="s3"></label>
      <label for="s4"></label>
      <label for="s5"></label>
   </div>
</div>
<!--Fin de Sheet Slider-->
</div>
</section>
</main>

<script>
//<![CDATA[
var b,c=document.getElementsByClassName("sheet");window.onload=function(){var a=document.querySelectorAll("div.sh-btns label"),f=document.querySelectorAll("div.sh-arrows label");document.querySelector("div.sheet-slider ul").onmouseover=function(){clearInterval(b)};document.querySelector("div.sheet-slider ul").onmouseout=function(){d()};for(var e=0;e<c.length;++e)a[e].onclick=function(){clearInterval(b);d()},f[e].onclick=function(){clearInterval(b);d()};d()};function d(){b=setInterval(g,4E3)}
function g(){for(var a=0;a<c.length;++a)if(1==c[a].checked){a==c.length-1?c[0].checked=!0:c[a+1].checked=!0;break}};
//]]>
</script>

			
				<div class='footer-wrapper'> SIRPEC 2.0 &#169;COPYRIGHT 2017<br/><center><a href="http://plus.google.com" class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a></center><a href='#'>Todos los derechos reservados</a><br/> </div>
</div>
</body>
<style>
.icono_menu{
	position: relative;
	z-index: 2;
	/*left: -100%;*/
	top: -150px;	
	left: 20px;
}
a{
	text-decoration: none;
	color: #fff;
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

.inic{
	text-decoration: none;
	color: #000;
}
</style>
<script>

if (Rol=="Consulta") {
var registrar=document.getElementById('registrar').style.display="none";
var registrar1=document.getElementById('registrar1').style.display="none";


}

</script>
		<script src="../../js/classie.js"></script>
		<script src="../../js/mlpushmenu.js"></script>
		<script src="../../js/jquery.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );
		</script>
</html>