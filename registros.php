
<?php error_reporting(0);

$log = fopen(".\Config\Log.txt" , "a");

?>

<html>
    <!--// Div que reduce el tamaño del interior mediante CSS-->
	<div class="zoom">
	<!-- División del icono de menú-->
	<div>
	  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
	</div>

	<!-- Hoja de estilos CSS -->
	<head><link rel="stylesheet" type="text/css" href="CSS\Hoja de estilos.css"></head>
	<!-- Cuerpo -->
	<body>
		
		<!-- Div del menú-->
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="./index.php">Inicio</a>
			
			<a href="./Manual.php">Configuración manual</a>
			<a href="./Automatización.php">Configuraciones guardadas</a>
			  <a href="./Alertas.php">Alertas</a>
		</div>
		</div>
		<!-- Div principal -->
		<div id="main">

		<!-- Banner superior -->
		<header>
			<h1>Registros.</h1>
		</header>


		<article>
			
			<fieldset id ="registros">
				<?php
					$homepage = file_get_contents('.\Config\Log.txt');
					echo nl2br ($homepage);
				?>
			</fieldset>
			<br>
			<p align="right"><input type="button" onclick="confirmar();" value="Eliminar todos los registros" />
			
			
			
		

		</article>

		<!-- Banner inferior-->
		<footer>Álvaro Jiménez Palenzuela 2º ASIR I.E.S. Al-Andalus</footer>


		<!--Funciones JavaScript para el abrir y cerrar el menú-->
		<script>
		function confirmar() {
				if (confirm("¿Seguro que desea borrar todos los registros?")) {
				location.href='borrarregistros.php'
				txt = "Todos los registros han sido borrados.";
		
			}

			}
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";

		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";

		}
		</script>
		</div>
	</body>
</html>


