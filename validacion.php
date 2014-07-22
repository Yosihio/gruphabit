<?php
	session_start();
	require('conexion.inc');
		$qUsuario="SELECT * FROM usuarios WHERE nomusuario='".$_POST['username']."' AND clave='".$_POST['password']."'";
		$rqUsuario=mysql_query($qUsuario)or die('no se puede ejecutar qUsuario');
		$filUsuario=mysql_fetch_array($rqUsuario);
		$numusuario=mysql_num_rows($rqUsuario);
		$idUsuario=$filUsuario['idusuario'];
		$nomusuario=$filUsuario['nomusuario'];
		$nombre=$filUsuario['nombre'];
		$clave=$filUsuario['clave'];
		$tipo=$filUsuario['tipo'];
	mysql_free_result($rqUsuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<title>Bienvenida</title>
	<link href='img/icon/habitat.PNG' rel='shortcut icon' type='image/png'>
	<link rel="stylesheet" href="css/normalize.css" />
	<script type="text/javascript" src="js/prefixfree.js"></script>
	<script type="text/javascript" src="js/sistema.js"></script>
</head>
<body>
<?php
	if ($tipo==0) {
		echo "<br><br><br>";
		echo "<div align='center'>El usuario no existe o los datos que ingresa no son correctos<br>";
		echo "<a href='login.php'>Intentar nuevamente</a></div>";
	}else{
		if ($tipo==1) {
			echo "admin";
			?>
			<table width="200" border="0">
				<tr>
					<td>
						<div class="divBienvenida">
						<p>¡Bienvenido! </p>
      					<p><?php echo $nombre; ?></p>
    					</div>
    				</td>
  				</tr>
  			<tr>
    			<td>
    				<form action="" method="post">
					<input type="button" value="Entrar" onclick="redireccionadmin();"/>
					</form>
				</td>
			</tr>
			</table>
			<?php
		}else{
			if ($tipo==2) {
				echo "Usuario 1";
				?>
				<table width="200" border="0">
					<tr>
						<td>
							<div class="divBienvenida">
							<p>¡Bienvenido! </p>
	      					<p><?php echo $nombre; ?></p>
	    					</div>
	    				</td>
	  				</tr>
	  			<tr>
	    			<td>
	    				<form action="" method="post">
						<input type="button" value="Entrar" onclick="redireccionuser1();"/>
						</form>
					</td>
				</tr>
				</table>
				<?php
			}else{
				if ($tipo==3) {
					echo "Usuario 2";
					?>
					<table width="200" border="0">
						<tr>
							<td>
								<div class="divBienvenida">
								<p>¡Bienvenido! </p>
		      					<p><?php echo $nombre; ?></p>
		    					</div>
		    				</td>
		  				</tr>
		  			<tr>
		    			<td>
		    				<form action="" method="post">
							<input type="button" value="Entrar" onclick="redireccionuser2();"/>
							</form>
						</td>
					</tr>
					</table>
					<?php
				}
			}
		}
	}
?>
</body>
</html>

<?php
	mysql_close();
?>