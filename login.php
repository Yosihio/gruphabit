<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Login GAH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
    </head>
    <body>
        <div class="container">
            <div class="codrops-top">
                <a href="index.php">
                    <strong>&laquo; Grupo Ambiental Habitat </strong>S. A. de C. V. © 2013
                </a>
                <span class="right">
                    <a href="index.php">
                        <strong>Regresar A La Página</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div>
            <header>
                <h1>Sistema de Logueo <span>Grupo Ambiental Habitat</span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="validacion.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Usuario </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="User name"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="**********" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Recordar mi password</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="Submit"/> 
								</p>
                                <p class="change_link">
								</p>
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>