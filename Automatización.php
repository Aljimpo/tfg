<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!--// Div que reduce el tamaño del interior mediante CSS-->
		<div class="zoom">
		<!-- División del icono de menú-->
		<div>
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
		</div>
		</div>
		<!-- Hoja de estilos CSS -->
		<link rel="stylesheet" type="text/css" href="CSS\Hoja de estilos.css">
		
		
	</head>
	
	<body>
	   <!--// Div que reduce el tamaño del interior mediante CSS-->
		<div class="zoom">
		<!-- Div del menú-->
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="./index.php">Inicio</a>
		   <a href="./Manual.php">Configuración manual</a>
		  <a href="./Alertas.php">Alertas</a>
		  <a href="./registros.php">Registros</a>
		</div>
		</div>
		<!-- Div del menú-->
		<div id="main">
	
		<!-- Banner superior -->
		<header>
		   <h1>Configuraciones guardadas.</h1>
		</header>
		
			
		<!--tabla donde ordenaremos toda la información-->
		<article>
			
<fieldset>

		
		
		<h1><a href=".\Configuraciones\Personalizada1.php" style="color:blue;">Config 1.</h1></a><br><br>
	
	
		<h1><a href=".\Configuraciones\Personalizada2.php" style=" color:blue;">Config 2.</h1></a><br><br>
		
		<h1><a href=".\Configuraciones\Personalizada3.php" style="color:blue;">Config 3.</h1></a><br><br>
		
		<h1><a href=".\Configuraciones\Personalizada4.php" style=" color:blue;">Config 4.</h1></a><br><br>
		
		<h1><a href=".\Configuraciones\Personalizada5.php" style="color:blue;">Config 5.</h1></a><br>
	

</fieldset>
	<br>
		

		<footer>Álvaro Jiménez Palenzuela 2º ASIR I.E.S. Al-Andalus</footer>



		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";

			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";

			}
		</script>


	</body>
</html> 
