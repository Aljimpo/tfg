Esta página web esta desarrollada en PHP,HTML,CSS y JavaScript.

Todas las páginas web reciben el estilo de el archivo "Hoja de estilos.css" de la carpeta CSS.



-	La carpeta "amcharts_3.21.12.free" contiene los archivos necesarios para que funcionen los gráficos.
-	“Manual.php” 35.230.70.16/FCT/Manual.php  Se encarga de tomar las configuraciones de los usuarios y enviarlas al fichero "Between.php"

-	"Between.php" se encarga de que la Raspberry Pi 3 reciba los datos de configuración, para eso escribe en  35.230.70.16/FCT/config/Config.txt 
	la configuración que se ejecutará. 
	También se hará cargo de crear las configuraciones guardadas,  pudiendo acceder a las mismas en 35.230.70.16/FCT/Automatización.php
	Se encarga también de escribir los registros en http://35.230.70.16/FCT/registros.php 

-	“Datos.json” alberga la fecha, temperatura y humedad que nos ofrece el sensor de humedad DHT11 dentro del invernadero,
	 este archivo es sobrescrito constantemente por la Raspberry Pi 3 para actualizar los datos. 35.230.70.16/FCT/json/Datos.json 

-	“manual.php” copiará el contenido de “Datos.json” dentro de los archivos “humedad.js” y “temperatura.js” en la carpeta “Scripts”.
	Estos archivos al ser invocados en el archivo “manual.php” crearán los gráficos de la humedad y temperatura.

-	El archivo "Config.txt" en la carpeta "Config" contiene la configuración que usará la Raspberry en ese momento, 
	este fichero puede modificarse en la sección “Configuración Manual” de la página web. 35.230.70.16/FCT/config/Config.txt

-	El archivo “Alertas.php” Se encarga de recibir todos los parámetros de configuración sobre las alertas introducidos 
	por el usuario en la web y mandarlos a “Betweenalertas.php” con un formulario.

-	El archivo "Betweenalertas.php" Actúa de intermediario entre la página web y la   Raspberry Pi, escribiendo en el archivo 
	"ConfigAlertas.txt" la configuración sobre los avisos por correo electrónico y enviando todos los datos necesarios a la Raspberry,
	 guarda los cambios de configuración en los registros.
  
-	El archivo "ConfigAlertas.txt” en la carpeta "Config" contiene la configuración que usará la Raspberry para enviar correos electrónicos de alerta,
	 este fichero puede modificarse en la sección “Alertas” de la página web.   

-	El archivo “Registros.php” se encarga de mostrar los registros guardados, podemos acceder a él en la sección “Registros” de la página web.

-	El archivo “borrarregistros.php” se encarga de borrar todos los registros. Se invoca pulsando el botón al final de “registros.php”
	 antes de borrarlos, pedirá que confirmemos el borrado para evitar errores.

-	El archivo “Consejos generales.js” en la carpeta “Consejos” contiene un script que mostrará consejos en la parte más baja de algunas secciones de la Web.
