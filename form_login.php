<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
     <title> Minimal Art Web</title>
     <link href="estilos.css" rel="stylesheet" type="text/css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="index.js"></script>
    </head>
    <body class="home-form_login">
        <header>
         <!--Título-web-->
            <div class="secciones">
                <div class="título-página">
                    <a class="navbar-brand" href="index.html">
                      <h1>Minimal Art</h1>
                    </a>
                </div>
             <!--Secciones-->
             <div class="col-sm-5"><a href="historia.html"><p>Historia</p></a></div>
             <div class="col-sm-5"><a href="artistas.html"><p>Artistas</p></a></div>
             <div class="col-sm-5"><a href="obras.html"><p>Obras</p></a></div>
             <div class="col-sm-5"><a href="museos.html"><p>Museos</p></a></div>
             <div class="col-sm-5"><a href="contacto.html"><p>Contacto</p></a></div>
             <div class="col-sm-5"><a href="form_login.html"><p>Ingresar</p></a></div>
            </div> 
        </header>

      <!--Formulario-registro-->
        <div class="contenedor-central">
            <div class="form-login">
                <!--Título-sección-form_login-->
               <div class="título-sección-form_login">
                 <p>Iniciar sesión</p>
                </div>

                <!--Formulario-inicio-sesión-->
                <form action="login.php" method="post">
    	            <label>Nombre de usuario
        	         <input name="usuario" type="text" />
                    </label><br />
                    <label>Contraseña
        	         <input type="password" name="password"/>
                    </label><br />
        	     <input type="submit" value="Ingresar"/>	
                </form>
             <div class="registrate"><a href="formulario-registro.html">Registrate</a> si no sos usuario.</div>
            </div>
        </div>

     <!--Estilos-->
        <style>
            .registrate{
              text-decoration: none;
              color: white;
              text-align: center;
            }

            .form-login input[type="text"],
            .form-login input[type="password"] {
             color: #000; 
             background-color: #fff; 
             border: 1px solid #ccc; 
             padding: 10px; 
             font-size: 16px; 
             width: 100%; 
             box-sizing: border-box; 
            }
        </style>

     <!--Footer-->
        <footer>
            <div class="footer">
             <p class="copyright">minimalartvictoriafernándezcopyright2024©</p>
            </div>
        </footer>
    </body>
</html>