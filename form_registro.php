<!doctype html>
<html>
    <head>
     <meta charset="utf-8">
     <title>Minimal Art Web</title>
     <link href="estilos.css" rel="stylesheet" type="text/css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="index.js"></script>
    </head>

    <body>
	  <h2>Registrate en el sitio</h2>
        <form action="registro.php" method="post" >
    	    <label>Nombre
        	 <input type="text" name="nombre" required />
            </label><br />
		    <label>Apellido
        	  <input type="text" name="apellido" required />
            </label><br />
            <label>Email
        	  <input type="email" name="email" required />
            </label><br />
            <label>Nombre de usuario
        	 <input name="usuario" type="text" />
            </label><br />
            <label>Contraseña
        	 <input type="password" name="password" />
            </label><br />
         <input type="submit" value="Registrarse"/>	
        </form>
    </body>
</html>