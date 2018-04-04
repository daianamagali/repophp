<?php

	ini_set("display_errors", "1");
	error_reporting(E_ALL);

	if (isset($_GET["p"]) ) { //<--Si existe(isset) el parametro p en la url...
		
		$archivo = $_GET["p"] . ".php"; //<--Asi no muestra la extencion de los archivos en la URL
	
	} else { //<--Si NO existe...
	
		$archivo = "inicio.php";
	
	}

	include "header.php";
?>

<div class="container">

	<section id="page">
	
		<?php

		if ( file_exists( $archivo ) ) {
			
			include $archivo;

		} else {

			echo "ERROR 404 - Page not found";
		}

		?>
	
	</section>

</div>
<?php include "footer.php" ?>
