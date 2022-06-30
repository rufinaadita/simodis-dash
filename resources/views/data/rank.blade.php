@extends('layout.dash')

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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Rank SAIDI per Penyulang</h4>
                    </div>
                    <div class="card-body">
                        <div id="rank"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script>
        Highcharts.chart('rank', {
            chart: {
                type: 'column',
                width: 1400
            },
            title: {
                text: 'Monthly Average Rainfall'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
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
                    text: 'Rank'
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
                name: 'Rank SAIDI Ulp',
                data: [
                    @foreach ($query as $value)
                        {{ $value->ranksaidi }},
                    @endforeach
                ]

            }]
        });

    </script>

@endsection
