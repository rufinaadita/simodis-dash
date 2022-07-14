@extends('navbar.dash')

@section('content')

    <div class="container">
        <div class="page-heading mt-4">
            <div class="text-center">
                <h2>Dashboard Kehandalan UP3 Pekanbaru Tahun 2021</h2>
                <h5>Monitoring Kinerja SAIDI SAIFI Harian UP3 Pekanbaru</h5>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="rank"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div id="kum-gangguan"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div id="fgtm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script>
        Highcharts.chart('rank', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Realisasi SAIDI Perpenyulang'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    @foreach ($query as $value)
                        '{{ $value->penyulang }}',
                    @endforeach
                ],
                crosshair: true,
                labels: {
                    style: {
                        fontSize: '8px'
                    },
                    rotation: 90
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Rank SAIDI',
                data: [
                    @foreach ($query as $value)
                        {{ $value->ranksaidi }},
                    @endforeach
                ]

            }]
        });

    </script>
    <script>
        Highcharts.chart('kum-gangguan', {
            title: {
                text: 'Komulatif Gangguan Bulanan'
            },
            xAxis: {
                categories: [
                    @foreach ($kum_gangguan as $value)
                        '{{ $value->rayon }}',
                    @endforeach
                ]
            },
            series: [{
                type: 'column',
                name: 'Jumlah Gangguan',
                data: [
                    {{ $n_gangguan }}
                ]
            }]
        }, function(chart) {
            var text = chart.renderer.text(
                    'Total Gangguan : {{ $total_gangguan }}',
                    1000,
                    100
                ).attr({
                    zIndex: 5
                }).add(),
                textBox = text.getBBox();

            console.log(typeof chart.renderer);

            chart.renderer.rect(textBox.x - 10, textBox.y - 5, textBox.width + 20, textBox.height + 10, 2)
                .attr({
                    fill: '#BADA55',
                    stroke: 'black',
                    'stroke-width': 1,
                    zIndex: 4
                })
                .add();
        });

    </script>
    <script>
        Highcharts.chart('fgtm', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'FGTM MoM UP3 PEKANBARU'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    @foreach ($fgtm as $value)
                        '{{ $value->bulan }}',
                    @endforeach
                ],
                crosshair: true

            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Jumlah Gangguan',
                data: [
                    @foreach ($fgtm as $value)
                        {{ $value->jml_gangguan }},
                    @endforeach
                ]

            }]
        });

    </script>

@endsection
