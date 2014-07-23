<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Empresa prestadora de servicios Ambientales, de Seguridad Industrial, Higiene y Medio Ambiente Laboral" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<title>Grupo Ambiental Hábitat</title>
	<link href='img/icon/habitat.PNG' rel='shortcut icon' type='image/png'>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/estilos.css" />
	<link rel="stylesheet" href="css/contactanos.css">
	<script src="js/prefixfree.js"></script>


</head>
<body onload="Slider();">

	<header>
		<div id="div_logo">
			<figure id="logo">
				<a href="index.php">
				<img src="img/habitat.png" />
				</a>
			</figure>
			<h1>Grupo Ambiental Hábitat
            		<a href="" class="icon-twitter sponsor" target="_blank" rel="nofollow"></a>
            		<a href="https://www.facebook.com/GrupoAmbientalHabitat?fref=ts" class="icon-facebook sponsor" target="_blank" rel="nofollow"></a>
            		<a href="" class="icon-googleplus sponsor" target="_blank" rel="nofollow"></a>
            </h1>
		</div>
		<div id="div_menu">	
			<nav>
				<ul>
					<li class="selected"><a href="quienes.php">¿Quienes somos?</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="historia.php">Historia</a></li>
					<li><a href="alianzas.php">Alianzas</a></li>
					<li><a href="contactanos.php">Contactanos</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</div>	
	</header>

<section class="formcontac">
<form name="efren-martinez" id="formmail" method="post" action="contact.php">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<input type="text" name="name" id="name" placeholder="Nombre" autocomplete="off" tabindex="1" class="txtinput">
			<input type="email" name="email" id="email" placeholder="E-mail" autocomplete="off" tabindex="2" class="txtinput">
			<input type="text" name="website" id="website" placeholder="Website URL" autocomplete="off" tabindex="3" class="txtinput">
			<input type="tel" name="telephone" id="telephone" placeholder="Telefono" tabindex="4" class="txtinput">
			<textarea name="message" id="message" placeholder="Comentario" tabindex="5" class="txtblock"></textarea>
		</div>
		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Enviar !">
			<br style="clear:both;">
		</section>
		</form>
</section>

	<footer id="footer" class="footer">
    	<div class="fcontenido">
        	<span>Grupo Ambiental Hábitat S. A. de C. V. © 2014</span>
        	<div class="social">
            	<div><span>Nos Encuentran En<br></span>
            		<a href="https://www.google.com.mx/maps/place/Grupo+Ambiental+Habitat,+S.A.+De+C.V./@19.529025,-96.91447,17z/data=!3m1!4b1!4m2!3m1!1s0x85db32023415b1d3:0xfc2e33009f890070" class="icon-map-pin sponsor" target="_blank" rel="nofollow"></a>
            	</div>
        	</div>
    	</div>
	</footer>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/habitatjs.js"></script>
</body>
</html>