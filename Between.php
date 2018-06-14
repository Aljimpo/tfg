
<?php error_reporting(0);
$config = fopen(".\Config\Config.txt" , "w+");

$log = fopen(".\Config\Log.txt" , "a");



$luzrango = $_POST['group1'];
$ventrango = $_POST['group2'];
$riegorango = $_POST['group3'];
$iniciotiempoluz= $_POST['iniciotiempoluz'];
$finaltiempoluz= $_POST['finaltiempoluz'];
$luzcadadias= $_POST['luzcadadias'];
$iniciotiempovent= $_POST['iniciotiempovent'];
$finaltiempovent= $_POST['finaltiempovent'];
$ventcadadias= $_POST['ventcadadias'];
$iniciotiemporiego= $_POST['iniciotiemporiego'];
$segsriego= $_POST['segsriego'];
$guardarConfig= $_POST['guardarConfig'];
$nombreConfig= $_POST['nombreConfig'];
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
			<a href="./registros.php">Registros</a>
		</div>
		</div>
		<!-- Div principal -->
		<div id="main">

		<!-- Banner superior -->
		<header>
			<h1>Configuración aceptada.</h1>
		</header>


		<article>
			<h1>Sus datos son correctos y han sido introducidos en el sistema. </h1><a href=".\index.php"><h1>Volver</h1>
			<a>

			<br>

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




<?php error_reporting(0);
#Escribimos en el archivo de configuración.
$logcheck=1;
$rangocheck=0;
fwrite($config,
	$luzrango
 ."\n". $ventrango
 ."\n". $riegorango
 ."\n". $iniciotiempoluz
 ."\n". $finaltiempoluz
 ."\n". $luzcadadias
 ."\n". $iniciotiempovent
 ."\n". $finaltiempovent
 ."\n". $ventcadadias
 ."\n". $iniciotiemporiego
 ."\n". $segsriego
 ."\n". $guardarConfig
 ."\n". $nombreConfig
 ."\n". date("Y"."\n"."m"."\n"."d"."\n"."H"."\n"."i"."\n"."s")
 ."\n". $logcheck
 ."\n". $rangocheck);
 
if($guardarConfig == 1)
	if($nombreConfig == "Config 1")
		$guardar= $config1 = fopen(".\Configuraciones\Personalizada1.php" , "w+");
	else if ($nombreConfig == "Config 2")
		$guardar= $config2 = fopen(".\Configuraciones\Personalizada2.php" , "w+");
	else if ($nombreConfig == "Config 3")
		$guardar= $config3 = fopen(".\Configuraciones\Personalizada3.php" , "w+");
	else if ($nombreConfig == "Config 4")
		$guardar= $config4 = fopen(".\Configuraciones\Personalizada4.php" , "w+");
	else if ($nombreConfig == "Config 5")
		$guardar= $config5 = fopen(".\Configuraciones\Personalizada5.php" , "w+");
	fwrite($guardar, 
	'
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
				<h1>');
				fwrite($guardar,$nombreConfig);
				fwrite($guardar,'</h1> 
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
						<fieldset id="group1"  style="border:0;">');
						    if ($luzrango ==0)
								fwrite($guardar, '
								<input type="radio" name="group1" value="0" required checked><h1>Iluminación permanente</h1>
								<br>
								
								<input type="radio" name="group1" value="2" disabled><h1>Iluminación apagada</h1>
								<br>
								
								<input type="radio" name="group1" value="1" disabled><h1>Iluminación encendida de:</h1>'
								 
								);
							
							elseif($luzrango ==1)
								fwrite($guardar, '
									<input type="radio" name="group1" value="0" disabled><h1>Iluminación permanente</h1>
								<br>
								
								<input type="radio" name="group1" value="2" disabled><h1>Iluminación apagada</h1>
								<br>
								
								<input type="radio" name="group1" value="1" checked ><h1>Iluminación encendida de:</h1>'
								);
							
							elseif($luzrango ==2)
								fwrite($guardar, '
									<input type="radio" name="group1" value="0" disabled><h1>Iluminación permanente</h1>
								<br>
								
								<input type="radio" name="group1" value="2" checked ><h1>Iluminación apagada</h1>
								<br>
								
								<input type="radio" name="group1" value="1" disabled ><h1>Iluminación encendida de:</h1>'
								);
							
							fwrite($guardar, '
							<input name="iniciotiempoluz" id = "charstype" type="time" value="');
							fwrite($guardar, $iniciotiempoluz);
							fwrite($guardar, '" required " readonly >
							<label for="finaltiemmpoluz"> <h1>a:</h1></label>
							<input id = "charstype1" type="time" name="finaltiempoluz" value="');
							fwrite($guardar, $finaltiempoluz);
							fwrite($guardar, '"required  readonly >
							<label for="luzcadadias"><h1>cada</h1></label>
							<input id = "charstype2" type="number" min = "1" name="luzcadadias" required value="');
							fwrite($guardar, $luzcadadias);
							fwrite($guardar, '" readonly><h1>dia /s</h1>');
							
							fwrite($guardar, '<input type=hidden name =iniciotiempoluz value ="');
							fwrite($guardar, $iniciotiempoluz);
							fwrite($guardar, '">');
							fwrite($guardar, '<input type=hidden name =finaltiempoluz value ="');
							fwrite($guardar, $finaltiempoluz);
							fwrite($guardar, '">');
							fwrite($guardar, '<input type=hidden name =luzcadadias value ="');
							fwrite($guardar, $luzcadadias);
							fwrite($guardar, '">');
							fwrite($guardar, '
						</fieldset>
				
					<!-- creamos Formulario para la ventilación -->
					
						<fieldset id="group2" style="border:0;" >');
							if ($ventrango ==0)
								fwrite($guardar, '
									<input type="radio" name="group2" value="0" checked ><h1>Ventilación permanente</h1>
									
									</br>
									
									<input type="radio" name="group2" value="2" disabled ><h1>Ventilación apagada </h1>
									
									</br>
									
									<input type="radio" name="group2" value="1" disabled><h1>Ventilación encendida de: </h1>');
								
								if ($ventrango ==1)
								fwrite($guardar, '
									<input type="radio" name="group2" value="0" disabled ><h1>Ventilación permanente</h1>
									
									</br>
									
									<input type="radio" name="group2" value="2" disabled ><h1>Ventilación apagada </h1>
									
									</br>
									
									<input type="radio" name="group2" value="1" checked ><h1>Ventilación encendida de: </h1>');
									
								if ($ventrango ==2)
								fwrite($guardar, '
									<input type="radio" name="group2" value="0" disabled ><h1>Ventilación permanente</h1>
									
									</br>
									
									<input type="radio" name="group2" value="2" checked ><h1>Ventilación apagada </h1>
									
									</br>
									
									<input type="radio" name="group2" value="1" disabled ><h1>Ventilación encendida de: </h1>');
								fwrite($guardar, '
								<input id = "vent" type="time" name="iniciotiempovent" value="');
								fwrite($guardar, $iniciotiempovent);
								fwrite($guardar,'"required readonly>
								<label for="finaltiemmpovent"><h1> a:</h1></label>
								<input id = "vent1" type="time" name="finaltiempovent" value="');
								fwrite($guardar, $finaltiempovent);
								fwrite($guardar, '"required readonly>
								<label for="ventcadadias"><h1>cada</h1></label>
								<input id = "vent2" type="number" min = "1" name="ventcadadias" value ="');
								fwrite($guardar, $ventcadadias);
								fwrite($guardar, '" readonly >
								<h1>día /s</h1>');
								
								fwrite($guardar, '<input type=hidden name =iniciotiempovent value ="');
								fwrite($guardar, $iniciotiempovent);
								fwrite($guardar, '">');
								fwrite($guardar, '<input type=hidden name =finaltiempovent value ="');
								fwrite($guardar, $finaltiempovent);
								fwrite($guardar, '">');
								fwrite($guardar, '<input type=hidden name =ventcadadias value ="');
								fwrite($guardar, $ventcadadias);
								fwrite($guardar, '">');
								fwrite($guardar, '
						</fieldset>
					
											
				</td>
				<td>
				<!--columna izquierda de información y configuración-->
				<!-- creamos Formulario para el riego-->
						<fieldset id="group3" style="border:0;">');
							if ($riegorango ==0)
								fwrite($guardar, '
					
								<input	type="radio" name="group3" value="0" checked ><h1>Riego manual</h1><br>
								
								<input	type="radio" name="group3" value="2" disabled ><h1>Riego apagado</h1><br>

								<input  type="radio" name="group3" value="1" disabled ><h1>Regar la planta cada </h1>');
								
							if ($riegorango ==1)
								fwrite($guardar, '
					
								<input	type="radio" name="group3" value="0" disabled><h1>Riego manual</h1><br>
								
								<input	type="radio" name="group3" value="2" disabled ><h1>Riego apagado</h1><br>

								<input  type="radio" name="group3" value="1" checked ><h1>Regar la planta cada </h1>');
								
							if ($riegorango ==2)
								fwrite($guardar, '
					
								<input	type="radio" name="group3" value="0" disabled ><h1>Riego manual</h1><br>
								
								<input	type="radio" name="group3" value="2" checked ><h1>Riego apagado</h1><br>

								<input  type="radio" name="group3" value="1" disabled ><h1>Regar la planta cada </h1>');
								fwrite($guardar, '
								<input id = "riego" type="number" min = "1" style ="width:70px;" name="iniciotiemporiego" required readonly value="');
								fwrite($guardar, $iniciotiemporiego);
								fwrite($guardar, '"><h1> horas</h1>
								
								</br>
								<h1> 
								<input type="radio"  style="opacity:0">Regar la planta <input type="number" id = "segsriego" name="segsriego" min="1" max="120" required readonly value="');
								fwrite($guardar, $segsriego);
								fwrite($guardar, '"/> 
								segundos</h1></br>
								</br>
								
								</br>');
								fwrite($guardar, '<input type=hidden name =iniciotiemporiego value ="');
								fwrite($guardar, $iniciotiemporiego);
								fwrite($guardar, '">');
								fwrite($guardar, '<input type=hidden name =segsriego value ="');
								fwrite($guardar, $segsriego);
								fwrite($guardar, '">');
								fwrite($guardar, '
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
	</div>');


	
#Escribimos en el archivo de log.
fwrite($log, date("\n"."["."Y"."-"."m"."-"."d"." "."H".":"."i".":"."s"."]")
	."La configuracion a ejecutar sera la siguiente: ");
	if ($luzrango == 0)
		fwrite($log, "Iluminacion encendida permanentemente. ");
	elseif ($luzrango == 2)
		fwrite($log, "Iluminacion apagada. ");
	elseif($luzrango == 1)
		fwrite($log, "Iluminacion encendida de "  . $iniciotiempoluz . " a " . $finaltiempoluz . " cada " . $luzcadadias . " dias. ");

	if ($ventrango == 0)
		fwrite($log, "Ventilacion encendida permanentemente. ");
	elseif ($ventrango == 2)
		fwrite($log, "Ventilacion apagada. ");
	elseif($ventrango == 1)
		fwrite($log, "Ventilacion encendida de "  . $iniciotiempovent . " a " . $finaltiempovent . " cada " . $ventcadadias . " dias. ");
		
	if ($riegorango == 0)
		fwrite($log, "Riego manual, " . $segsriego . " segundos.");
	elseif ($riegorango == 2)
		fwrite($log, "Riego apagado.");
	elseif($riegorango == 1)
		fwrite($log, "Activar riego cuando la humedad sea menor a: " . $iniciotiemporiego. "%, regar ".  $segsriego . " segundos. ");

	if($guardarConfig ==1)
		fwrite($log, ' Guardada en ');
		fwrite($log, $nombreConfig);
		fwrite($log, '.');
	
?>