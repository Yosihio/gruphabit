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
<body>
<div id="colorson">
	<header>
		<div id="div_logo">
			<figure id="logo">
				<a href="index.php">
				<img src="img/congaviota.png" />
				</a>
			</figure>
			<h1>
				Grupo Ambiental Hábitat
			</h1>
		</div>
		<div id="div_menu">	
			<nav>
				<ul>
					<li ><a href="quienes.php">¿Quienes somos?</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="historia.php">Historia</a></li>
					<li><a href="alianzas.php">Alianzas</a></li>
					<li class="selected"><a href="contactanos.php">Contáctanos</a></li>
					<li ><a href="login.php">Login</a></li>
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
			<textarea name="message" id="message" placeholder="Mensaje" tabindex="5" class="txtblock"></textarea>
			</section>
			<section id="aside" class="clearfix">
				<section id="recipientcase">
				<h3>Ubicacion:</h3>
Xalapeños Ilustres #164 bis.<br>
Centro. C. P. 91000.<br>
Tel. (228) 8 41 56 61 y 8 41 17 18.<br>
Xalapa, Veracruz.<br>
email:direccion@grupo‐habitat.com<br>
ventas@grupo‐habitat.com
				</section>
			</section>
		</div>
		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Enviar !">
			<br style="clear:both;">
		</section>
		</form>
	</section>

	<div style="background:url('img/svg/grass1.svg'); height:50px;">
	</div>

	<footer id="footer" class="footer">
		<div class="footer_div_contacto">
			<p><strong>Contacto</strong></p>
			<ul>
				<li>(228) 8 41 56 61</li>
				<li>(228) 8 41 17 18</li>
				<li>direccion@grupo‐habitat.com</li>
				<li>ventas@grupo‐habitat.com</li>
			</ul>
		</div>
		<div class="footer_div_socialmedia">
			<p><strong>Nuestras redes sociales</strong></p>
			<a href="http://www.linkedin.com/company/grupo-ambiental-h%C3%A1bitat-s-a-de-c-v-" target="_blank" rel="nofollow">
				<img src="img/svg/linkedin.svg" width="50" height="50"/>
			</a>
			&nbsp
			&nbsp
			&nbsp
	     	<a href="https://www.facebook.com/GrupoAmbientalHabitat?fref=ts" target="_blank" rel="nofollow">
	            <img src="img/svg/facebook.svg" width="50" height="50"/>
	       	</a>
	           
		</div>
		<div class="footer_div_ubicacion">
			<p><strong>Ubicación</strong></p>
			<div class="footer_div_direccion">
				<ul>
					<li>Xalapeños Ilustres #164 bis</li>
					<li>Colonia Centro Histórico</li>
					<li>C. P. 91000</li>
					<li>Xalapa, Veracruz</li>
				</ul>
			</div>
			<div class="footer_div_maps" id="googleMap"></div>
		</div>
    	<div class="fcontenido" style="margin-top:20px;">
        	<span>Grupo Ambiental Hábitat S. A. de C. V. © 2014</span>
    	</div>
	</footer>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/habitatjs.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
	<script type="text/javascript" src="js/gmaps.js"></script>
</div>
</body>
</html>