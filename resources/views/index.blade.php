@extends('layout.template')

@section('content')

    @php
    // dd($harian);
    $jml_hr = cal_days_in_month(CAL_GREGORIAN, $harian['bulan'], 2021); //jumlah hari perbulan

    $saidi = $harian['saidi_harian'];
    $saifi = $harian['saifi_harian'];
    @endphp

    <div class="page-heading">
        <h3>Realisasi SAIDI SAIFI Harian</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="/dash">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6>Select Bulan</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="bulan" required>
                                                <option disabled="disabled" selected>Pilih</option>
                                                @for ($i = 1; $i <= 12; $i++)
                                                    <option value="{{ $i }}">{{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                            @error('bulan')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Select Ulp</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="ulp" required>
                                                <option disabled="disabled" selected>Pilih</option>
                                                @for ($i = 0; $i < count($ulp_list); $i++)
                                                    <option value="{{ $ulp_list[$i]->nama_ulp }}">
                                                        {{ $ulp_list[$i]->nama_ulp }}
                                                    </option>
                                                @endfor
                                                <option value="{{ $up3_name[0]->nama_ulp }}">
                                                    {{ $up3_name[0]->nama_ulp }}
                                                </option>
                                            </select>
                                            @error('ulp')
                                                <span class="text-danger">{{ $message }}</span>
                                                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                                            @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Refresh</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap Select end -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Monitoring Realisasi SAIDI Harian</h4>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="saidi"></div>

                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Monitoring Realisasi SAIFI Harian</h4>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="saifi"></div>

                            </figure>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-3">

                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="card">
                            <div class="card-body py-4 px-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('assets/images/faces/8.jpg') }}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Danish Zahir</h5>
                                        <h6 class="text-muted mb-0">@zahirdanish</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Hello, John!</h6>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/main/profile') }}"><i
                                    class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i> User Control</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                Logout</a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Petugas Operator</h4>
                    </div>
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ asset('assets/images/faces/4.jpg') }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Hank Schrader</h5>
                                <h6 class="text-muted mb-0">@schraderhank</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ asset('assets/images/faces/5.jpg') }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Dean Winchester</h5>
                                <h6 class="text-muted mb-0">@imdean</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ asset('assets/images/faces/1.jpg') }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ asset('assets/images/faces/8.jpg') }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Danish Zahir</h5>
                                <h6 class="text-muted mb-0">@zahirdanish</h6>
                            </div>
                        </div>
                        {{-- <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                Conversation</button>
                        </div> --}}
                    </div>
                </div>
            </div>

        </section>
    </div>

    <script>
        Highcharts.chart('saidi', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Monitoring Realisasi SAIDI Harian'
            },
            subtitle: {
                text: 'Source: {{ $nama_ulp }}'
            },
            xAxis: [{
                categories: [
                    @for ($hari = 1; $hari <= $jml_hr; $hari++)
                        {{ $hari }},
                    @endfor
                ],
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Realisasi',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Target',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: Highcharts.defaultOptions.legend
                    .backgroundColor ||
                    // theme
                    'rgba(255,255,255,0.25)'
            },
            series: [{
                name: 'Realisasi Harian SAIDI',
                type: 'column',
                yAxis: 1,
                data: [
                    @for ($hari = 1; $hari <= $jml_hr; $hari++)
                        {{ $realisasi['harian_saidi'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ' '
                }

            }, {
                name: 'Realisasi Kumulatif',
                type: 'column',
                yAxis: 1,
                data: [
                    @for ($hari = 1; $hari <= $jml_hr; $hari++)
                        {{ $realisasi['relekum_saidi'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ' '
                }

            }, {
                name: 'Target Kumulatif',
                type: 'spline',
                data: [
                    @for ($hari = 1; $hari <= count($target['target_saidi']['target_kum']); $hari++)
                        {{ $target['target_saidi']['target_kum'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ''
                }
            }, {
                name: 'Target Harian',
                type: 'spline',
                data: [
                    @for ($hari = 1; $hari <= count($target['target_saidi']['target_harian']); $hari++)
                        {{ $target['target_saidi']['target_harian'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ''
                }
            }]
        });

    </script>
    <script>
        Highcharts.chart('saifi', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Monitoring Realisasi SAIFI Harian'
            },
            subtitle: {
                text: "Source: {{ $nama_ulp }}"
            },
            xAxis: [{
                categories: [
                    @for ($hari = 1; $hari <= $jml_hr; $hari++)
                        {{ $hari }},
                    @endfor
                ],
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Realisasi',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Target',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: Highcharts.defaultOptions.legend
                    .backgroundColor ||
                    // theme
                    'rgba(255,255,255,0.25)'
            },
            series: [{
                name: 'Realisasi Harian SAIFI',
                type: 'column',
                yAxis: 1,
                data: [
                    @for ($hari = 1; $hari <= $jml_hr; $hari++)
                        {{ $realisasi['harian_saifi'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ' '
                }

            }, {
                name: 'Realisasi Kumulatif',
                type: 'column',
                yAxis: 1,
                data: [
                    @for ($hari = 1; $hari <= $jml_hr; $hari++)
                        {{ $realisasi['relekum_saifi'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ' '
                }

            }, {
                name: 'Target Kumulatif',
                type: 'spline',
                data: [
                    @for ($hari = 1; $hari <= count($target['target_saifi']['target_kum']); $hari++)
                        {{ $target['target_saifi']['target_kum'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ''
                }
            }, {
                name: 'Target Harian',
                type: 'spline',
                data: [
                    @for ($hari = 1; $hari <= count($target['target_saifi']['target_harian']); $hari++)
                        {{ $target['target_saifi']['target_harian'][$hari] }},
                    @endfor
                ],
                tooltip: {
                    valueSuffix: ''
                }
            }]
        });

    </script>
@endsection
