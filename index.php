<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<link rel="stylesheet" href="css/iconos.css">
<link rel="stylesheet" href="css/piep.css" type="text/css" media="screen">
<link rel="shortcut icon" type="image/x-icon" href="img/sirpec.ico" />


<script src="js/jquery.js"></script>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>SIRPEC</title>
</head>
<body>

<div class="col-md-12 header">

<button type="button" class="btn btn-primary boton1"><a href="quienesSomos.php">QUIENES SOMOS</a></button>
<button type="button" class="btn btn-primary boton2"><a href="#" onclick="mostrar()">RESEÑA HISTORICA</a></button>	
	
    

	<section class="padre">
	<form action="sesion.php" id="formualrio">
		<article class="hijo_usuario">
		<input type="text"  placeholder="Usuario" class="form-control usuario" id="usuario1" name="usuario1">
		<span class="icon icon-user icono-usuario"></span>
			
		</article>
		<article class="hijo_contraseña">

		<input type="password"  placeholder="Contraseña" class="form-control contraseña" id="contraseña1" name="contraseña1">
		<span class="icon icon-key2 icono-contra"></span>

		</article>
		<article class="enviar">
			
		<input type="button" value="Entrar" onclick="login()" class="btn negro btn-blanco">
</form>

		</article>
			
			
	</section>


<script>
	
	    function login() {
      var usuario=document.getElementById('usuario1').value;
      var contraseña=document.getElementById('contraseña1').value;
      $("#contenedor").load("login.php",{usuario:usuario, contraseña:contraseña})



    }
</script>


<img src="img/slide-2.png" class="img img-responsive slide" alt="">
<img src="img/img_logo3.png" class="logo" alt="">


	<div class="col-md-12" id="contenedor">
	

	

<div class="container contenedor">
	<div class="row">
		<div class="col-md-4">
			<h3></h3>
			<p></p>
		</div>
		<div class="col-md-4">
			<h3><CENTER></CENTER></h3>
			<p><CENTER>SISTEMA DE INFORMACION PARA EL REGISTRO </CENTER>
			<CENTER>DE PECES DE CEBA</CENTER></p>
		</div>
		<div class="col-md-4">
			<h3></h3>
			<p></p>
		</div>
	</div>
</div>

<!-- AQUI ABAJO ESTA LA VENTANA EMEETNENIAS9DY -->
<div class="modal fade" id="myModal" role="dialog">
 
<div class="modal-dialog">
      <!-- Modal content-->
 
<div class="modal-content">
 
<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
 
<h4 class="modal-title">Reseña Historica</h4>
 
       </div>
 
 
<div class="modal-body">
         SIRPEC”sistema de información para el registro de peces de ceba” fue un sistema de información realizado en el año 2011-2012, desarrollado por aprendices del Centro agropecuario “La Granja” Espinal – Tolima, con número de ficha 229231
La información de esta unidad se administraba de forma manual y con herramientas ofimáticas, de tal manera no era segura y así causaba  perdida de dicha información, debido a esto se llegó a la idea de realizar un sistema de información SIRPEC (Sistema de información para el registro de peces) una herramienta que permitiría optimizar el rendimiento y una mayor seguridad de la unidad de piscicultura y así mejorar todos sus propósitos gracias a un control óptimo de la información, todo se llevó a cabo pero a la entrega del sistema de información se verifico   que  al momento de ingresar la información, carece de un proceso “TRASLADO” debido a esto nace SIRPEC 2.0.

SIRPEC 2.0 cuenta con la idea de actualizar y mejorar el sistema de información, de manera correcta resaltando así los requisitos del cliente y el objetivo general del sistema, que es satisfacer las necesidades en cuanto la información de la producción   a la unidad de piscicultura.
       </div>
 
 
<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>


</div>
</div>
</div>



<script>
	
function mostrar() {
	$("#myModal").modal("show");
}
 // $("#mostrarmodal").modal("show");


</script>



	
<div class='footer-wrapper'> SIRPEC_2.0 &#169;COPYRIGHT 2017<br/><a href='http://sirpec2016.blogspot.com.co/'>Contactenos</a><br/> </div>	
</div>

</body>
<style>
.footer-wrapper { background: #333333; /*Color de fondo del pie de página*/ padding-top: 20px;  padding-bottom: 20px; width: 100%; text-align: center; font: normal normal 12px Arial; /*Tamaño y tipografía*/ color: #ffffff; /*Color del texto*/ letter-spacing: 2px; /*Espaciado entre caracteres, si no queréis borrar la línea*/ text-transform: uppercase; /*Para que esté en mayúsculas, si no queréis borrad la línea*/ } .footer-wrapper a{   color:#cccccc; /*Color del enlace (Todos los derechos reservados)*/  text-decoration:none; } .footer-wrapper a:hover{   color:#ffffff; /*Color del enlace al pasar el ratón por encima*/ } 



.boton1{

    position: relative;
	display: block;
	z-index: 1;
	top: 20px;
	left: 26px;
}
.boton1 a{
	color: #FFF;
}
.boton2{
	position: relative;
	display: block;
	z-index: 1;
	top: -14px;
	left: 200px;
}

.boton2 a{
color: #FFF;
}


.contenedor{

	position: relative;
	bottom: 200px;
}
.logo{
	position: relative;
	display: block;
	width: 25%;
z-index: 1;
bottom: 220px;
margin: auto;
}

.slide{

	position: relative;
	display: block;
	height: 320px;
	width: 100%;
	opacity: 0.9;
	bottom: 100px;
	z-index: 0;
}

.enviar{

	width: 13%;
	position: relative;
left: 80%	;
	display: block;
	bottom: 157px;
	text-align: right;

}
.icono-usuario, .icono-contra{
position: relative;
max-width:100%;  
height: auto;
width: 100px;
left: 90%;
top: -25px;

}


.hijo_usuario{
	width: 13%;
	position: relative;
left: 55%	;
	display: block;
	bottom: 49px;
}


.hijo_contraseña{
	width: 13%;
	position: relative;
left: 72%	;
	display: block;
	bottom: 103px;


}

.padre{
	display: block;
	width: 100%;
	height: 100px	;

}

.usuario{
	position: relative;
	display: block;
	width: 200px;
}

.contraseña{
	position: relative;
	width: 200px;
	display: block;
}
	
.header{

width: 100%;
background: #1358BF;
height: 70px;
}

</style>



</html>		