<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <title>Panel</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>
  </head>

  <body class="home-panel">
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

    <!--Secciones-->
    <style>
      .home-panel{
        background-color: #E7E6DF;
        background-size: cover; 
        background-position: center; 
      }
    </style>

    <?php

     if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
     echo "<div class='hola-usuario-panel'>";
     echo "¡Hola! ";
     echo $_SESSION['nombre']." ";
     echo $_SESSION['apellido'];
     echo "<div class='contenido-exclusivo-usuarios'>";
     echo "<p>Este es un contenido exclusivo para usuarios registrados.</p>";
     echo "<h2>Muere el artista Frank Stella, precursor del minimalismo, a los 87 años</h2>";
     echo "<strong><p>Desde su primer éxito con los ‘Black Paintings’, que rompían con el expresionismo abstracto dominante en la época, generó una prolífica obra de más de 10.000 piezas donde predominaron las formas geométricas y el color.</p></strong>";
     echo "<div class='imagen-contenedor'><img src='./Imágenes/Artistas/Frank-Stella.png' width='600' height='300'></div>" ;
     echo "<p>El pintor Frank Stella, figura prominente del arte de la posguerra estadounidense, especialmente con sus primeras obras minimalistas, ha muerto este sábado en su casa de Nueva York, a los 87 años, a causa de un linfoma, según informa The New York Times. Pese a la insistencia de los críticos, Stella se negó a interpretar su obra con una célebre frase: “Lo que ves es lo que ves”.</p>";
     echo "<p>Nacido en 1936, en Malden, Massachusetts, hijo de Frank y Constance Stella, él ginecólogo y ella pintora paisajista, comenzó su carrera con pinturas sobrias, algunas con poco color y sin pretensiones de brindar un estímulo visual, lo que contrastaba con el expresionismo abstracto de la época. Sus primeros trabajos incluyeron una serie de pinturas con la técnica pinstriping (obras de gran formato con líneas negras finas sobre lienzos blancos) que causaron furor en el mundo del arte estadounidense.</p>";
     echo "<p>“Fue uno de los primeros artistas estadounidenses en educarse dentro de la abstracción y, por tanto, desarrollarse y progresar en ella de una forma natural, sin ninguna conversión traumática”, escribía el crítico Francisco Calvo Serraller en este periódico en 2012.</p>";
     echo "<p>Para obtener más información, ingresa a <div class='link-diario'><a href='https://elpais.com/cultura/2024-05-05/muere-el-artista-frank-stella-precursor-del-minimalismo-a-los-87-anos.html'>El País</a></p></div>";
          
     echo "<a href='salir.php' class='cerrar-sesion'>Cerrar sesión</a>";

	
      }else{
	      echo '<div style="margin-left: 3%;">Solo usuarios registrados...</div>';
        //	include("form_registro.php");
	      include("formulario-registro.html");
      }
    ?>

    <!--Estilos-->
    <style>
      .hola-usuario-panel{
        font-family: 'Nanum Myeongjo', serif;
        float: left;
        font-size: 20px;
        margin-top: 35px;
        margin-left: 3%;
        margin-right: 3%;
      }

      .cerrar-sesion{
        display: block;
        float: left;
        margin-top: 10px;
        color: brown; 
        text-decoration: none;
        margin-left: 3%;
        margin-right: 3%;
      }

      .contenido-exclusivo-usuarios{
        font-family: 'Nanum Myeongjo', serif;
        text-align: justify;
        font-size: 20px;
        margin-top: 35px;
        margin-left: 3%;
        margin-right: 3%;
      }

      .link-diario a{
        display: block;
        margin-top: 10px;
        color: brown; 
        text-decoration: none;
      }
    </style>

    <!--Estilos-->
    <style>
      .copyright{
        font-family: 'Nanum Myeongjo', serif;  
        text-align: center;
        font-size: 15px;
        margin-top: 45px;
        margin-right: 12%;
      }
    </style>

  </body>
</html>