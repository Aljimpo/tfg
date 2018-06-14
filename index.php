<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--// Div que reduce el tamaño del interior mediante CSS-->
	<div class="zoom">
<div>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
</div>
  
		<!-- Hoja de estilos CSS -->
		<link rel="stylesheet" type="text/css" href="CSS\Hoja de estilos.css">
		</div>
</head>
<body>
  <!--// Div que reduce el tamaño del interior mediante CSS-->
	<div class="zoom">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./index.php">Inicio</a>
  <a href="./Manual.php">Configuración manual</a>
  <a href="./Automatización.php">Configuraciones guardadas</a>
    <a href="./Alertas.php">Alertas</a>
		  <a href="./registros.php">Registros</a>

</div>
</div>
<div id="main">

</style>
</head>
<body background="p1_@2X.png">

<div class="container">

<header>
   <h1>Inicio</h1>
</header>

<article>
  <h1>Panel de control</h1>
  <p>Desde aquí podemos configurar todas las opciones de nuestro invernadero inteligente en la pestaña "Manual" dentro del menú</p>
  
</article>

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
