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

    <body class="biografia-artistas">

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
            </div> 
        </header>

        <section>
            <?php
	          include('conexion.php');

	          $buscar = $_POST['buscar'];
	          echo '<div style="margin-left: 5%;">Su consulta: <em>'.$buscar.'</em><br></div>';

	         $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
            ?>
            <article style="width:60%;margin:0 auto;border:solid;padding:10px">
	            <p>Cantidad de Resultados: 
	                <?php
		             $nros=mysqli_num_rows($consulta);
		              echo $nros;
	                ?>
	            </p>
    
	            <?php
		          while($resultados=mysqli_fetch_array($consulta)) {
	            ?>
                <p>
                    <?php	
			         echo $resultados['nombre'];
			         echo $resultados['bio'];
			        ?>
                </p>
                <hr/>
                <?php
		           }

		          mysqli_free_result($consulta);
		          mysqli_close($conexion);
                ?>
            </article>
        </section>

		<!--Footer-->
        <footer>
            <div class="footer">
             <p class="copyright">minimalartvictoriafernándezcopyright2024©</p>
            </div>
        </footer>
    </body>
</html>