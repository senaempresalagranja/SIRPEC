<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/iconos.css">
<link rel="stylesheet" href="css/piep.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/stylequi.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src='js/bootstrap.min.js'></script>
<script src="js/jquery.js"></script>
	<title>SIRPEC</title>
</head>
<body>

<div class="col-md-12 header">
<button type="button" class="btn btn-primary boton"><a href="index.php">INICIO</a></button>
<button type="button" class="btn btn-primary boton1"><a href="quienesSomos.php">QUIENES SOMOS</a></button>	

</div>

	<section class="padre">
	<form action="paginas/inicio_sesion/inicio.php" id="formualrio">
		<article class="hijo_usuario">
		<input type="text" name="" placeholder="Usuario" class="form-control usuario" id="usuario1">
		<span class="icon icon-user icono-usuario"></span>
			
		</article>
		<article class="hijo_contraseña">

		<input type="password" name="" placeholder="Contraseña" class="form-control contraseña" id="contraseña1">
		<span class="icon icon-key2 icono-contra"></span>

		</article>
		<article class="enviar">
			
		<input type="button" value="Entrar" onclick="login()" class="btn negro btn-blanco">


		</article>
	</form>		
			
	</section>


<script>
	
	    function login() {
      var usuario=document.getElementById('usuario1').value;
      var contraseña=document.getElementById('contraseña1').value;
      $("#contenedor").load("login.php",{usuario:usuario, contraseña:contraseña})



    }
</script>
	<div class=".col-md-12" id="contenedor">	
</div>
<div class="container_24">
        	<div class="grid_24">
            	<div class="top-1">
                    <h4><strong>INTENGRANTES:</strong> </h4>
					<div class="box-4 wrap">
                    	<div class="fleft">
                            <div class="box-1">
                                <img src="img/page5-img1.PNG" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="text-1">JENNY ALEJANDRA PERDOMO PEREZ</p>
                                </div>
                            </div>
                            <div class="comments-4">
                                <div class="comments-corner"></div>
                                <div class="comment-1">
                                    <div class="comment-2">
                                        <p class="text-4"><strong class="clr-1"></strong> JENNY ALEJANDRA PERDOMO PEREZ Tengo 20 años nací en el espinal -Tolima me encuentro en proceso de formación en el centro agropecuario la granja con un tecnólogo de ANÁLISIS Y DESARROLLO DE SISTEMA DE INFORMACIÓN  termine mi bachiller en el 2013 en el colegio mariano Sánchez andrades de espinal-Tolima
CORREO: japerdomo235@misena.edu.co
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fleft">
                            <div class="box-1">
                                <img src="img/page5-img2.png" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="text-1">ANGIE PAOLA MALAMBO ALVAREZ</p>
                                    <p class="text-2">said:</p>
                                </div>
                            </div>
                            <div class="comments-4">
                                <div class="comments-corner"></div>
                                <div class="comment-1">
                                    <div class="comment-2">
                                        <p class="text-4"><strong class="clr-1"></strong>ANGIE PAOLA MALAMBO ALVAREZ Tengo 17 años, actualmente vivo en el espinal junto con mis padres y mi hermano, mis pasatiempos son escuchar música y algunas veces me dedico al dibujo, actualmente estoy estudiando en el Sena un tecnólogo en Análisis y Desarrollo de Sistemas de Información.
CORREO: maangie35@misena.edu.co </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fleft">
                            <div class="box-1">
                                <img src="img/page5-img3.jpg" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="text-1">YUDI MELIZA PANDO CARDENAS</p>
                                    <p class="text-2">said:</p>
                                </div>
                            </div>
                            <div class="comments-4">
                                <div class="comments-corner"></div>
                                <div class="comment-1">
                                    <div class="comment-2">
                                        <p class="text-4"><strong class="clr-1"></strong> YUDI MELIZA PANDO CARDENAS
Tengo 17 años, nací en Bogotá actualmente estoy viviendo en Ibagué-Tolima, me encuentro especializándome  en el centro agropecuario la granja en un tecnólogo en ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN, termine mi bachiller en Lerida-tolima en el colegio Institución Educativa Técnica Colombo Alemán "Scalas".
CORREO: ympando@misena.edu.co
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fleft last">
                            <div class="box-1">
                                <img src="img/page5-img4.png" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="text-1">IRIS YULIMA GIRALDO</p>
                                    <p class="text-2">said:</p>
                                </div>
                            </div>
                            <div class="comments-4">
                                <div class="comments-corner"></div>
                                <div class="comment-1">
                                    <div class="comment-2">
                                        <p class="text-4"><strong class="clr-1"></strong> IRIS YULIMA GIRALDO
Tengo 18 años nací y actualmente me encuentro en el municipio de prado-Tolima, termine mi bachillerato en la institución educativa Luis Felipe pinto (prado-Tolima) y  me estoy capacitando en el programa de formación en análisis y desarrollo de sistemas de información en el centro agropecuario la granja.
Correo electrónico:  iygiraldo7@misena.edu.co
 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-4 wrap top-8">
                    	<div class="fleft">
                            <div class="box-1">
                                <img src="img/page5-img5.jpg" alt="" class="img-border img-indent">
                                <div class="extra-wrap">
                                    <p class="text-1">GUILLERMO ALFONSO LEMUS</p>
                                </div>
                            </div>
                            <div class="comments-4">
                                <div class="comments-corner"></div>
                                <div class="comment-1">
                                    <div class="comment-2">
                                        <p class="text-4"><strong class="clr-1"></strong> GUILLERMO ALFONSO LEMUS
Tengo 19 años nací en purificación Tolima actualmente vivo en Saldaña Tolima me encuentro en formación en  un  tecnólogo  en análisis y desarrollo de  sistemas  de información en el centro agropecuario la granja  el espinal termine  mis   estudios como  bachiller  2014  en   colegio Roberto Leiva  de Saldaña
CORREO  : ga19@misena.edu.co 
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<br>	
<div class='footer-wrapper'> SIRPEC 2.0 &#169;COPYRIGHT 2017<br/><a href='URL QUE QUIERAS LINKEAR'>Todos los derechos reservados</a><br/> </div>	
</body>
<style>
.footer-wrapper { background: #333333; /*Color de fondo del pie de página*/ padding-top: 20px;  padding-bottom: 20px; width: 100%; text-align: center; font: normal normal 12px Arial; /*Tamaño y tipografía*/ color: #ffffff; /*Color del texto*/ letter-spacing: 2px; /*Espaciado entre caracteres, si no queréis borrar la línea*/ text-transform: uppercase; /*Para que esté en mayúsculas, si no queréis borrad la línea*/ } .footer-wrapper a{   color:#cccccc; /*Color del enlace (Todos los derechos reservados)*/  text-decoration:none; } .footer-wrapper a:hover{   color:#ffffff; /*Color del enlace al pasar el ratón por encima*/ } 

.boton{

	position: relative;
	display: block;
	z-index: 1;
	top: 20px;
}
.boton a{
	color: #FFF;
}

.boton1{

    position: relative;
	display: block;
	z-index: 1;
	top: -14px;
	left: 76px;
}
.boton1 a{
	color: #FFF;
}
.boton2{
	position: relative;
	display: block;
	z-index: 1;
	top: -48px;
	left: 229px;
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
	bottom: 30px;
	z-index: 0;
}

.enviar{

	width: 13%;
	position: relative;
left: 80%	;
	display: block;
	bottom: 165px;
	text-align: right;

}
.icono-usuario, .icono-contra{
position: relative;
width: 100px;
left: 100%;
top: -25px;

}


.hijo_usuario{
	width: 13%;
	position: relative;
left: 55%	;
	display: block;
	bottom: 51px;
}


.hijo_contraseña{
	width: 13%;
	position: relative;
left: 72%	;
	display: block;
	bottom: 108px;


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

.btn{
  font-size: ;
}
.negro{
	color:black;
}
.blanco{
	color:black;
}
</style>
</html>