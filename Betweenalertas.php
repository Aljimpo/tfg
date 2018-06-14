
<?php error_reporting(0);
$config = fopen(".\Config\ConfigAlertas.txt" , "w+");

$log = fopen(".\Config\Log.txt" , "a");

$inftemp = $_POST['inftemp'];
$suptemp = $_POST['suptemp'];
$abonado = $_POST['abonado'];
$humedad= $_POST['humedad'];
$agua= $_POST['agua'];
$email= $_POST['email'];

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
fwrite($config,
		$inftemp
 ."\n". $suptemp
 ."\n". $abonado
 ."\n". $humedad
 ."\n". $agua
 ."\n". $email
 ."\n". date("Y"."\n"."m"."\n"."d"."\n"."h"."\n"."i"."\n"."s"));

#Escribimos en el archivo de log.
fwrite($log, date("\n"."["."Y"."-"."m"."-"."d"." "."h".":"."i".":"."s"."]")
	."Se enviará una alerta en los siguientes casos: ");
	if (empty($inftemp)){
	}else{
	fwrite($log,"La temperatura es menor a: ".$inftemp."º. ");	
	}
	
	if(empty($suptemp)){
	}else{
	fwrite($log,"La temperatura es superior a: ".$suptemp."º. ");	
	}
	if(empty($abonado)){
	}else{
	fwrite($log,"Cada ".$abonado." días para recordar el abonado. ");	
	}
	if(empty($agua)){
	}else{
	fwrite($log,"Cuando el contenedor de agua se encuentre casi vacío. ");	
	}
	if(empty($email)){
	}else{
	fwrite($log,"Enviar al email: ".$email);	
	}


?>