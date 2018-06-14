
	<?php
	include "..\importarJSON.php";
	importarJSON();
	?>
	<div class="zoom">
	<html>
		<!--Incluimos la fuente de los scripts de los gráficos de humedad y temperatura.-->
		<script src="..\amcharts_3.21.12.free\amcharts\amcharts.js" type="text/javascript"></script>
		<script src="..\amcharts_3.21.12.free\amcharts\serial.js" type="text/javascript"></script>

			<!-- Scripts de configuración y valores del gráfico de temperatura -->
				<script language="JavaScript1.1" src="..\Scripts\Temperatura.js"></script>
			<!-- Scripts de configuración y valores del gráfico de humedad -->
				<script language="JavaScript1.1" src="..\Scripts\Humedad.js"></script>	
				
		<!-- División del icono de menú-->
		<div>
		  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
		</div>

		<!-- Hoja de estilos CSS -->
		<head><link rel="stylesheet" type="text/css" href="..\CSS\Hoja de estilos.css"></head>
		<!-- Cuerpo -->
		<body>
			<!-- Div del menú-->
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="../index.php">Inicio</a>
				<a href="../Manual.php">Config. Manual</a>
				<a href="../Automatización.php">Configuraciones guardadas</a>
				  <a href="../Alertas.php">Alertas</a>
			  <a href="../registros.php">Registros</a>
			</div>
			<!-- Div principal -->
			<div id="main">

			<!-- Banner superior -->
			<header>
				<h1>Config 1</h1> 
			</h1>
			</header>

			<article>
					
				<!--tabla donde ordenaremos toda la información-->
				<table>
				<tbody>
				<tr>
				<td><!--columna derecha de información y configuración-->
				<!-- creamos Formulario para la luz U.V -->
					<form action="..\Between.php" method="post" autocomplete="off"> 
						<fieldset id="group1"  style="border:0;">
									<input type="radio" name="group1" value="0" disabled><h1>Iluminación permanente</h1>
								<br>
								
								<input type="radio" name="group1" value="2" disabled><h1>Iluminación apagada</h1>
								<br>
								
								<input type="radio" name="group1" value="1" checked ><h1>Iluminación encendida de:</h1>
							<input name="iniciotiempoluz" id = "charstype" type="time" value="13:06" required " readonly >
							<label for="finaltiemmpoluz"> <h1>a:</h1></label>
							<input id = "charstype1" type="time" name="finaltiempoluz" value="13:09"required  readonly >
							<label for="luzcadadias"><h1>cada</h1></label>
							<input id = "charstype2" type="number" min = "1" name="luzcadadias" required value="1" readonly><h1>dia /s</h1><input type=hidden name =iniciotiempoluz value ="13:06"><input type=hidden name =finaltiempoluz value ="13:09"><input type=hidden name =luzcadadias value ="1">
						</fieldset>
				
					<!-- creamos Formulario para la ventilación -->
					
						<fieldset id="group2" style="border:0;" >
									<input type="radio" name="group2" value="0" disabled ><h1>Ventilación permanente</h1>
									
									</br>
									
									<input type="radio" name="group2" value="2" disabled ><h1>Ventilación apagada </h1>
									
									</br>
									
									<input type="radio" name="group2" value="1" checked ><h1>Ventilación encendida de: </h1>
								<input id = "vent" type="time" name="iniciotiempovent" value="13:06"required readonly>
								<label for="finaltiemmpovent"><h1> a:</h1></label>
								<input id = "vent1" type="time" name="finaltiempovent" value="13:09"required readonly>
								<label for="ventcadadias"><h1>cada</h1></label>
								<input id = "vent2" type="number" min = "1" name="ventcadadias" value ="1" readonly >
								<h1>día /s</h1><input type=hidden name =iniciotiempovent value ="13:06"><input type=hidden name =finaltiempovent value ="13:09"><input type=hidden name =ventcadadias value ="1">
						</fieldset>
					
											
				</td>
				<td>
				<!--columna izquierda de información y configuración-->
				<!-- creamos Formulario para el riego-->
						<fieldset id="group3" style="border:0;">
					
								<input	type="radio" name="group3" value="0" disabled ><h1>Riego manual</h1><br>
								
								<input	type="radio" name="group3" value="2" checked ><h1>Riego apagado</h1><br>

								<input  type="radio" name="group3" value="1" disabled ><h1>Regar la planta cada </h1>
								<input id = "riego" type="number" min = "1" style ="width:70px;" name="iniciotiemporiego" required readonly value=""><h1> horas</h1>
								
								</br>
								<h1> 
								<input type="radio"  style="opacity:0">Regar la planta <input type="number" id = "segsriego" name="segsriego" min="1" max="120" required readonly value=""/> 
								segundos</h1></br>
								</br>
								
								</br><input type=hidden name =iniciotiemporiego value =""><input type=hidden name =segsriego value ="">
								<input type="radio"  style="opacity:0"><input type="submit" value="Enviar">             
								
								
						</fieldset>
					</form>
					
					
				</td>
				</tr>
				<tr>
				<td>
				<!-- creamos un campo para la visualización de la temperatura actual y su gráfico-->
					<fieldset>
						<h1>Temperatura actual =</h1>
						<div id="temperaturadiv" style="width:820px; height:400px;"></div>
					</fieldset></td>
				<td>	
				<!-- creamos un campo para la visualización de la humedad actual y su gráfico-->
					<fieldset>
						<h1>Humedad actual = </h1>
						<div id="humedaddiv" style="width:820px; height:400px"></div>
					</fieldset></td>
				</tr>
				</tbody>
				</table>
				<br>
				
				<!-- invocamos al script que nos ofrecerá un consejo de manera aleatoria. -->
				<h1 >Consejo:</h1><script language="JavaScript1.1" src="..\Consejos\Consejos Generales.js"style="font-size:11"f></script>
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

			
			</script>
			</div>
		</body>
	</html>
	</div>