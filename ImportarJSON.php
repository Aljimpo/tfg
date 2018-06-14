<?php
	function importarJSON() {
	//abrimos fichero de datos

	
	
	//Creamos el archivo de configuración de la temperatura.
	$humedad = fopen("C:\\xampp\\htdocs\\FCT\\Scripts\\Humedad.js" , "w");
	$temperatura = fopen("C:\\xampp\\htdocs\\FCT\\Scripts\\Temperatura.js" , "w");
	$json =fopen("C:\\xampp\\htdocs\\FCT\\json\\Datos.json" , "a");

	//eliminamos el ult imo caracter de el archivo json para quitar la coma final.

	$copiajson = file_get_contents("C:\\xampp\\htdocs\\FCT\\json\\Datos.json");
	$copiajosn = $json;
	//Escribimos el fichero
	fwrite($temperatura, 'var chart;
	var graph;
	var TempData = [');
	//insertamos el archivo json.
	fwrite($temperatura, $copiajson);
	fwrite($temperatura, '];
	AmCharts.ready(function () {
					// SERIAL CHART
					chart = new AmCharts.AmSerialChart();

					chart.dataProvider = TempData;
					chart.marginLeft = 10;
					chart.categoryField = "fecha";
					

					// listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
					chart.addListener("dataUpdated", zoomChart);

					// AXES
					// category
					var categoryAxis = chart.categoryAxis;
				categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
					categoryAxis.minPeriod = "mm"; // as we have data with minute interval, we have to set "mm" here.
					categoryAxis.dashLength = 3;
					categoryAxis.minorGridEnabled = true;
					categoryAxis.minorGridAlpha = 0.1;

					// value
					var valueAxis = new AmCharts.ValueAxis();
					valueAxis.axisAlpha = 0;
					valueAxis.inside = true;
					valueAxis.dashLength = 3;
					chart.addValueAxis(valueAxis);

					// GRAPH
					graph = new AmCharts.AmGraph();
					graph.type = "step"; // this line makes the graph smoothed line.
					graph.lineColor = "#d1655d";
					graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
					graph.bullet = "round";
					graph.bulletSize = 8;
					graph.bulletBorderColor = "#FFFFFF";
					graph.bulletBorderAlpha = 1;
					graph.bulletBorderThickness = 2;
					graph.lineThickness = 2;
					graph.valueField = "temperatura";
					graph.balloonText = "[[category]]<br><b><span style=');fwrite($temperatura,"font-size:14px;");fwrite($temperatura,'>[[value]]</span></b>";
					chart.addGraph(graph);

			// CURSOR

					var chartCursor = new AmCharts.ChartCursor();

					chartCursor.cursorAlpha = 0;
				
			chartCursor.cursorPosition = "mouse";
	 
					chartCursor.categoryBalloonDateFormat = "YYYY-MM-DD";

					chart.addChartCursor(chartCursor);


					// SCROLLBAR

					var chartScrollbar = new AmCharts.ChartScrollbar();

					chart.addChartScrollbar(chartScrollbar);


					chart.creditsPosition = "bottom-right";
				  

					// WRITE
					chart.write("temperaturadiv");
				});

				
				function zoomChart() {
				
				chart.zoomToDates(new Date(0, 0), new Date(2050, 0));
				}');
	//Ahora escribimos el archivo de configuración de la humedad.
	fwrite($humedad, 'var chart;
	var graph;

	var ChartData = [');
						
	fwrite($humedad, $copiajson);
	fwrite($humedad, '];
	AmCharts.ready(function () {
					// SERIAL CHART
					chart = new AmCharts.AmSerialChart();

					chart.dataProvider = ChartData;
					chart.marginLeft = 10;
					chart.categoryField = "fecha";
				   

					// listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
					chart.addListener("dataUpdated", zoomChart);

					// AXES
					// category
					var categoryAxis = chart.categoryAxis;
					categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
			categoryAxis.minPeriod = "mm"; // as we have data with minute interval, we have to set "mm" here.
					
					categoryAxis.dashLength = 5;
					categoryAxis.minorGridEnabled = true;
					categoryAxis.minorGridAlpha = 0.1;

					// value
					var valueAxis = new AmCharts.ValueAxis();
					valueAxis.axisAlpha = 0;
					valueAxis.inside = true;
					valueAxis.dashLength = 3;
					chart.addValueAxis(valueAxis);

					// GRAPH
					graph = new AmCharts.AmGraph();
					graph.type = "step"; // this line makes the graph smoothed line.
					graph.lineColor = "#d1655d";
					graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
					graph.bullet = "round";
					graph.bulletSize = 8;
					graph.bulletBorderColor = "#FFFFFF";
					graph.bulletBorderAlpha = 1;
					graph.bulletBorderThickness = 2;
					graph.lineThickness = 2;
					graph.valueField = "humedad";
					graph.balloonText = "[[category]]<br><b><span style=');fwrite($humedad,"font-size:14px;");fwrite($humedad,'>[[value]]</span></b>";
					chart.addGraph(graph);

			
	// CURSOR

					var chartCursor = new AmCharts.ChartCursor();


					chartCursor.cursorAlpha = 0;

					chartCursor.cursorPosition = "mouse";

					chartCursor.categoryBalloonDateFormat = "YYYY-MM-DD";

					chart.addChartCursor(chartCursor);


					// SCROLLBAR

					var chartScrollbar = new AmCharts.ChartScrollbar();

					chart.addChartScrollbar(chartScrollbar);


					chart.creditsPosition = "bottom-right";


				 
					// WRITE
					chart.write("humedaddiv");
				});

				
				function zoomChart() {
				
				chart.zoomToDates(new Date(0, 0), new Date(2050, 0));
				}');
	}
	
	


?>