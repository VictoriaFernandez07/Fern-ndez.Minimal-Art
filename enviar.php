<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Enviar</title>
     <link href="estilos.css" rel="stylesheet" type="text/css">
    </head>

    <body class="home-enviar">
        <?php

         //se arma el array POST
         $nombre=$_POST['nombre'];
         $email=$_POST['email'];
         $comentario=$_POST["comentario"];

         $destino="mail@mail.com";
         $asunto="Contacto desde el sitio";
         $mensaje="Nombre: ".$nombre." Email: ".$email." Mensaje: ".$comentario;

         $header="From: ".$nombre."<".$email.">";

         $enviado = mail($destino,$asunto,$mensaje,$header);

            if($enviado == true){
	         echo "<p>Su mensaje ha sido enviado correctamente.</p>";
             echo "<p>¡Muchas gracias por tu comentario!</p>";
             echo "<p>Tu opinión nos ayuda a crecer</p>";
            }else{
	         echo "Hubo un error en el envio del mail.";
            }


         include "conexion.php";

         $consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre, mail, comentario) VALUES ( '$nombre','$email','$comentario')") or die(mysqli_error($conexion));



        ?>

     <!--Footer-->
        <footer>
            <div class="footer">
             <p class="copyright">minimalartvictoriafernándezcopyright2024©</p>
            </div>
        </footer>

     <!--Estilos-->
        <style>
            .home-enviar{
              background-color: #E7E6DF; 
              background-size: cover; 
              background-position: center; 
              font-family: 'Nanum Myeongjo', serif;
              margin-left: 3%;
              margin-top: 2%;
            }

            .copyright{
                text-align: center;
                margin-top: 50%;
            }
        </style>
    </body>
</html>