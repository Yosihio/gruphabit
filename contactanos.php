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
<form name="efren-martinez" id="efren-martinez-form" method="post" action="contact.php">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<input type="text" name="name" id="name" placeholder="Nombre" autocomplete="off" tabindex="1" class="txtinput">
			<input type="email" name="email" id="email" placeholder="E-mail" autocomplete="off" tabindex="2" class="txtinput">
			<input type="text" name="website" id="website" placeholder="Website URL" autocomplete="off" tabindex="3" class="txtinput">
			<input type="tel" name="telephone" id="telephone" placeholder="WhatsApp (optional)" tabindex="4" class="txtinput">
			<textarea name="message" id="message" placeholder="Comentario" tabindex="5" class="txtblock"></textarea>
			</section>
			<section id="aside" class="clearfix">
				<section id="recipientcase">
				<h3>Asunto:</h3>
					<select id="asunto" name="recipient" tabindex="6" class="selmenu">
  						<option value="rediseño">Auditoria</option>
  						<option value="programacion">Protecion</option>
  						<option value="desarrollo">Desarrollo</option>
  						<option value="aplicaciones">Ventas</option>
					</select>
				</section>
				<section id="prioritycase">
					<h3>Prioridad:</h3>
					<span class="radiobadge">
						<input type="radio" id="low" name="priority" value="baja">
						<label for="low">Baja</label>
					</span>
					<span class="radiobadge">
						<input type="radio" id="med" name="priority" value="media" checked="checked">
						<label for="med">Media</label>
					</span>
					<span class="radiobadge">
						<input type="radio" id="high" name="priority" value="alta">
						<label for="high">Alta</label>
					</span>
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

	<footer id="footer" class="footer">
    	<div class="fcontenido">
        	<span>Grupo Ambiental Hábitat S. A. de C. V. © 2013</span>
        	<div class="social">
            	<div><span>Nos Encuentran En</span>
            		<a href=""></a>
            	</div>
        	</div>
    	</div>
	</footer>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/habitatjs.js"></script>
</body>
</html>