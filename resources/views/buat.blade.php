<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS - www.malasngoding.com</title>
	<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
	<section class="section">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank"></div>
						
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank1"></div>
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank2"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank3"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank4"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank5"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div id="rank6"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div id="rank7"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
 
	<br/>
	<br/>

 
	<script>
		Highcharts.chart('rank', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
				]

			}]
		});

		Highcharts.chart('rank1', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
					
				]

			}]
		});
		Highcharts.chart('rank2', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
					
				]

			}]
		});

		Highcharts.chart('rank3', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
					
				]

			}]
		});

		Highcharts.chart('rank4', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
					
				]

			}]
		});

		Highcharts.chart('rank5', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
				
				]

			}]
		});

		Highcharts.chart('rank6', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			xAxis: {
				title: {
					text: 'GIKP-PRAMBANAN-CB'
				},
				categories: ['Jan'
					
				],
				crosshair: true,
				labels: {
					style: {
						fontSize: '8px'
					},
					rotation: 0
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
		
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					color: '#006699'
				}
			},
			series: [{
				name: 'Top 10 Gangguan Per Penyulang',
				data: [
					@foreach($penyulangAr as $p)
					{{ $p }},
					@endforeach
				
				]

			}]
		});

	</script>
</body>
</html>