var chart;
	var graph;
	var TempData = [{"fecha": "2018-06-03 14:19:25",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 14:20:28",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 14:21:31",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 14:22:33",
"temperatura": 30,
"humedad": 37
 },{"fecha": "2018-06-03 14:24:39",
"temperatura": 29,
"humedad": 34
 },{"fecha": "2018-06-03 14:25:43",
"temperatura": 30,
"humedad": 34
 },{"fecha": "2018-06-03 14:26:45",
"temperatura": 30,
"humedad": 33
 },{"fecha": "2018-06-03 14:27:48",
"temperatura": 31,
"humedad": 32
 },{"fecha": "2018-06-03 14:28:51",
"temperatura": 32,
"humedad": 31
 },{"fecha": "2018-06-03 14:29:54",
"temperatura": 32,
"humedad": 30
 },{"fecha": "2018-06-03 14:30:57",
"temperatura": 33,
"humedad": 28
 },{"fecha": "2018-06-03 14:33:03",
"temperatura": 34,
"humedad": 24
 },{"fecha": "2018-06-03 14:34:06",
"temperatura": 34,
"humedad": 26
 },{"fecha": "2018-06-03 14:36:11",
"temperatura": 31,
"humedad": 32
 },{"fecha": "2018-06-03 14:37:14",
"temperatura": 30,
"humedad": 32
 },{"fecha": "2018-06-03 14:39:19",
"temperatura": 29,
"humedad": 34
 },{"fecha": "2018-06-03 14:41:25",
"temperatura": 29,
"humedad": 35
 },{"fecha": "2018-06-03 14:42:27",
"temperatura": 29,
"humedad": 35
 },{"fecha": "2018-06-03 14:45:35",
"temperatura": 29,
"humedad": 35
 },{"fecha": "2018-06-03 14:46:40",
"temperatura": 29,
"humedad": 35
 },{"fecha": "2018-06-03 14:47:42",
"temperatura": 29,
"humedad": 35
 },{"fecha": "2018-06-03 14:48:45",
"temperatura": 29,
"humedad": 36
 },{"fecha": "2018-06-03 14:49:47",
"temperatura": 29,
"humedad": 36
 },{"fecha": "2018-06-03 14:50:50",
"temperatura": 29,
"humedad": 36
 },{"fecha": "2018-06-03 14:52:55",
"temperatura": 28,
"humedad": 35
 },{"fecha": "2018-06-03 14:55:00",
"temperatura": 28,
"humedad": 36
 },{"fecha": "2018-06-03 14:56:03",
"temperatura": 28,
"humedad": 36
 },{"fecha": "2018-06-03 14:58:08",
"temperatura": 28,
"humedad": 36
 },{"fecha": "2018-06-03 14:59:11",
"temperatura": 28,
"humedad": 36
 },{"fecha": "2018-06-03 15:00:13",
"temperatura": 28,
"humedad": 36
 },{"fecha": "2018-06-03 15:01:16",
"temperatura": 28,
"humedad": 37
 },{"fecha": "2018-06-03 15:02:18",
"temperatura": 28,
"humedad": 36
 },{"fecha": "2018-06-03 15:03:21",
"temperatura": 28,
"humedad": 37
 },{"fecha": "2018-06-03 16:16:12",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-03 16:17:15",
"temperatura": 27,
"humedad": 39
 },{"fecha": "2018-06-03 16:18:18",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 16:20:23",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:21:26",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:22:29",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:23:32",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:24:37",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:27:45",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:29:50",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:30:53",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 16:31:56",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 16:33:01",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 16:34:03",
"temperatura": 29,
"humedad": 42
 },{"fecha": "2018-06-03 16:36:09",
"temperatura": 29,
"humedad": 38
 },{"fecha": "2018-06-03 16:37:12",
"temperatura": 29,
"humedad": 39
 },{"fecha": "2018-06-03 16:38:15",
"temperatura": 28,
"humedad": 38
 },{"fecha": "2018-06-03 16:40:21",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:42:27",
"temperatura": 28,
"humedad": 38
 },{"fecha": "2018-06-03 16:43:30",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:44:33",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:46:44",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:49:53",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:51:59",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:53:02",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:54:05",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:56:12",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:57:15",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:58:18",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 16:59:21",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 17:00:24",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 17:01:27",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 17:02:30",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 17:04:12",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:04:43",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 17:28:31",
"temperatura": 28,
"humedad": 39
 },{"fecha": "2018-06-03 17:33:42",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:34:44",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:36:50",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:37:52",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:38:55",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:39:58",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:41:01",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:42:04",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:43:06",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:44:09",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:45:12",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:46:15",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:47:18",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:48:20",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:49:23",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:50:27",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:52:33",
"temperatura": 28,
"humedad": 40
 },{"fecha": "2018-06-03 17:53:35",
"temperatura": 27,
"humedad": 39
 },{"fecha": "2018-06-03 17:55:41",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:56:44",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:57:46",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 17:58:49",
"temperatura": 28,
"humedad": 41
 },{"fecha": "2018-06-03 18:13:17",
"temperatura": 27,
"humedad": 40
 },{"fecha": "2018-06-03 18:14:19",
"temperatura": 27,
"humedad": 40
 },{"fecha": "2018-06-03 18:14:21",
"temperatura": 26,
"humedad": 45
 },{"fecha": "2018-06-04 20:15:51",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:15:56",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:17:01",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:18:02",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:19:02",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:21:02",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:22:02",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:24:02",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:26:01",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:28:02",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:29:01",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:33:01",
"temperatura": 27,
"humedad": 41
 },{"fecha": "2018-06-04 20:35:02",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:36:01",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:37:01",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:38:01",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:40:01",
"temperatura": 27,
"humedad": 42
 },{"fecha": "2018-06-04 20:41:01",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:42:01",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:43:02",
"temperatura": 27,
"humedad": 43
 },{"fecha": "2018-06-04 20:44:01",
"temperatura": 27,
"humedad": 44
 },{"fecha": "2018-06-04 20:45:01",
"temperatura": 27,
"humedad": 44
 },{"fecha": "2018-06-04 20:46:01",
"temperatura": 26,
"humedad": 44
 },{"fecha": "2018-06-04 20:47:02",
"temperatura": 26,
"humedad": 44
 },{"fecha": "2018-06-04 20:48:01",
"temperatura": 26,
"humedad": 44
 },{"fecha": "2018-06-04 20:50:01",
"temperatura": 27,
"humedad": 44
 },{"fecha": "2018-06-04 20:51:02",
"temperatura": 27,
"humedad": 44
 },{"fecha": "2018-06-04 20:52:01",
"temperatura": 27,
"humedad": 44
 },{"fecha": "2018-06-04 20:54:02",
"temperatura": 27,
"humedad": 44
 },{"fecha": "2018-06-04 20:55:02",
"temperatura": 26,
"humedad": 44
 },{"fecha": "2018-06-04 20:45:02",
"temperatura": 25,
"humedad": 38
 },{"fecha": "2018-06-06 18:57:56",
"temperatura": 29,
"humedad": 32
 },{"fecha": "2018-06-10 09:17:15",
"temperatura": 28,
"humedad": 52
 },];
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
					graph.balloonText = "[[category]]<br><b><span style=font-size:14px;>[[value]]</span></b>";
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
				}