<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Grupo Ambiental Hábitat" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<title>Grupo Ambiental Hábitat</title>
	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/estilos2.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/prefixfree.js"></script>
	<script>
  function initialize() {
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
      center: new google.maps.LatLng(44.5403, -78.5463),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(map_canvas, map_options);
  }
</script>
</head>

<body>

	<header>
		<div id="div_logo">
			<figure id="logo">
				<img src="../img/habitat.png" />
			</figure>
			<a href="../"><h1>Grupo Ambiental Hábitat</h1></a>
		</div>
		<div id="div_menu">	
			<nav>
				<ul>
					<li><a href="#">¿Quienes somos?</a></li>
					<li><a href="../enlaces/">Enlaces</a></li>
					<li><a href="#">Logros</a></li>
					<li><a href="#">Contactos</a></li>
				</ul>
			</nav>
		</div>	
	</header>

	<section id="subt">
		<h2>Enlaces</h2>
	</section>

	<section id="contenido">
		<form>
			<li><a href="">Directorio de Veracruz</a></li>
			<li><a href="">Info Red</a></li>
			<li><a href="">A cambio de</a></li>
			<li><a href="">Portal Veracruz</a></li>
			<li><a href="">Protal Xalapa</a></li>
			<li><a href="">Asegura tu venta</a></li>
			<li><a href="">Seccion Amarilla</a></li>
			<li><a href="">Guia México</a></li>
			<li><a href="">viadeo.com</a></li>
			<li><a href="">Enlazandote</a></li>
			<li><a href="">Asociacón Mexicanan de Unidades de Verificación</a></li>
		</form>
	</section>

	<footer>
		<p>
			<strong>Grupo Ambiental Hábitat S. A. de C. V. © 2013</strong>
		</p>
		<p>
			Todos los derechos reservados
		</p>
	</footer>

</body>
</html>