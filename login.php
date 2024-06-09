<?php session_start();?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login de Usuarios</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>
  </head>

  <body class="home-login">
	  <?php
      $usuario=$_POST['usuario'];
      $password=md5($_POST['password']);

      include("conexion.php");


      $consulta=mysqli_query($conexion, "SELECT nombre, apellido FROM login WHERE usuario='$usuario' AND contraseña='$password'");

      $resultado=mysqli_num_rows($consulta);

      if($resultado!=0){
	      $respuesta=mysqli_fetch_array($consulta);
	
	      $_SESSION['nombre']=$respuesta['nombre'];
	      $_SESSION['apellido']=$respuesta['apellido'];
		
		    echo "<div class='hola-usuario-login'>";
        echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
		    echo "Acceso al panel de usuarios.<br/>";
		    echo "<a href='panel.php'><div class='panel'>Panel</div></a>";	

      }else{
        echo "<div class='error-usuario'>";
	      echo "No es un usuario registrado";
	      include ("formulario-registro.html");
      }
		?>

    <!--Estilos-->
    <style>
      .home-login{
        background-color: #E7E6DF;
        background-size: cover; 
        background-position: center; 
      }
      
      .hola-usuario-login{
        font-family: 'Nanum Myeongjo', serif;
        float: left;
        font-size: 20px;
        margin-top: 35px;
        margin-left: 3%;
        margin-right: 3%;
      }

      .panel{
        font-family: 'Nanum Myeongjo', serif;
        text-align: justify;
        color: brown;
      }

      .panel a{
        text-decoration: none;
      }

      .error-usuario{
        margin-top: 5%;
        margin-left: 3%;
      }
    </style>

  </body>
</html>