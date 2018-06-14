
	<html>
	<head>
		<!--Incluimos la fuente de los scripts de los gráficos de humedad y temperatura.-->
		<script src=".\amcharts_3.21.12.free\amcharts\amcharts.js" type="text/javascript"></script>
		<script src=".\amcharts_3.21.12.free\amcharts\serial.js" type="text/javascript"></script>
		<!-- Scripts de configuración y valores del gráfico de temperatura -->
		<script src=".\Scripts\Temperatura.js"></script> 
		<!-- Scripts de configuración y valores del gráfico de humedad -->
		<script src=".\Scripts\Humedad.js"></script>
		    <!--// Div que reduce el tamaño del interior mediante CSS-->
		<div class="zoom">
		<!-- División del icono de menú-->
		
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
		</div>
		<!-- Hoja de estilos CSS -->
		<link rel="stylesheet" type="text/css" href="CSS\Hoja de estilos.css">
		</div>
	</head>

	<body>
		 <!--// Div que reduce el tamaño del interior mediante CSS-->
		<div class="zoom">
		<!-- Div del menú-->
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="./index.php">Inicio</a>

		  
		  <a href="./Manual.php">Configuración manual</a>
		  <a href="./Automatización.php">Configuraciones guardadas</a>
		  <a href="./registros.php">Registros</a>
		</div>
		</div>
		<!-- Div principal -->
		<div id="main">

		<!-- Banner superior -->
		<header>
		   <h1>Alertas.</h1>
		</header>
		



		<article>
			<form action=".\Betweenalertas.php" method="post" autocomplete="off"> 
				<fieldset id="alertas">
				
					<input type="checkbox" id="checkbox1" onclick="onoffcheckbox1()"><h1> Enviar un aviso cuando la temperatura sea inferior a:
					<input type="number" min="-274" max="100" id="inftemp" name="inftemp" disabled required> o superior a: 
					<input type="number" min="-274" max="100" id="suptemp" name="suptemp" disabled required> grados centigrados. </h1><br> 

					
					<input type="checkbox" onclick="onoffcheckbox2()"><h1> Enviar un aviso de abonado cada:
					<input type="number" min ="0" max ="1000" id= "abonado" name="abonado" disabled required> dia /s. </h1><br>
					
					<input type="checkbox" onclick="onoffcheckbox3()"><h1> Enviar un aviso cuando la humedad sea menor a:
					<input type="number" min="0" max ="100" id="humedad" name="humedad" disabled required>%</h1><br>
					
					<input type="checkbox" id="agua" name="agua" value="1"><h1> Enviar un aviso cuando el contenedor de agua tenga poca agua.<h1> <br>
				
					
					<br>
					<h1><input type="checkbox" style="opacity:0;">Introduzca su correo electrónico. <input type="email" id = "email" name="email" required> 
					<input type="submit" value="Enviar"></h1>
					<br>
					<br>
					<h1><input type="checkbox" style="opacity:0;"></h1><a href="https://myaccount.google.com/lesssecureapps">Si no recibe las alertas, asegurese de que tiene habilitadas "aplicaciones menos seguras en gmail" 
					
				</fieldset>
			<form>
		</article>

		<!-- Banner inferior-->
		<footer>Álvaro Jiménez Palenzuela 2º ASIR I.E.S. Al-Andalus</footer>


		<!--Funciones JavaScript para el abrir y cerrar el menú-->
		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";

			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";

			}
			
			function onoffcheckbox1() {
				
				if(document.getElementById('inftemp').disabled===true){
				document.getElementById('inftemp').disabled = false;
				document.getElementById('suptemp').disabled = false;

				}else{
				document.getElementById('inftemp').disabled = true;
				document.getElementById('suptemp').disabled = true;
				}
			}
			
			function onoffcheckbox2() {
				
				if(document.getElementById('abonado').disabled===true){
				document.getElementById('abonado').disabled = false;


				}else{
				document.getElementById('abonado').disabled = true;

				}
			}
			function onoffcheckbox3() {
				
				if(document.getElementById('humedad').disabled===true){
				document.getElementById('humedad').disabled = false;


				}else{
				document.getElementById('humedad').disabled = true;

				}
			}
			
			
				
		</script>


		</body>
	</html>
