@extends('layout.dash')

@section('content')

    @php
    // dd($harian);
    $jml_hr = cal_days_in_month(CAL_GREGORIAN, $harian['bulan'], 2021); //jumlah hari perbulan

    $saidi = $harian['saidi_harian'];
    $saifi = $harian['saifi_harian'];
    @endphp

    <div class="container">
        <div class="page-heading">
            <h3>Monitoring Kinerja SAIDI SAIFI Harian</h3>
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <h6>Pilih Filter</h6>
                    <p>Use <code>.choices</code> class for basic choices control.</p>
                </div>
                <section class="section basic-choices">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <select class="choices form-select">
                                    @for ($i = 0; $i < count($ulp_list); $i++)
                                        <option value="{{ $ulp_list[$i]->nama_ulp }}">{{ $ulp_list[$i]->nama_ulp }}
                                        </option>
                                    @endfor
                                    <option value="{{ $up3_name[0]->nama_ulp }}">
                                        {{ $up3_name[0]->nama_ulp }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">BULAN</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- </section> --}}
                    <!-- Responsive tables start -->
                    {{-- <section class="section"> --}}
                    <div class="row" id="table-responsive">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title alert alert-primary">SAIDI HARIAN</h4>
                                </div>

                                <!-- table responsive -->
                                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                                    <table class="table mb-0 table-hover table-bordered">
                                        <thead class="table-light header">
                                            <tr>

                                                <th>No</th>
                                                <th>Unit Layanan Pelanggan</th>
                                                @for ($hari = 1; $hari <= $jml_hr; $hari++)
                                                    <th>{{ $hari }}</th>
                                                @endfor

                                                {{-- <th scope="col">#</th>
                                                    <th scope="col">Heading 1</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                            @foreach ($saidi['ulp'] as $row)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $row['nama_ulp']->nama_ulp }}</td>
                                                    @foreach ($row['data'] as $data)
                                                        <td>{{ $data }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="table-dark">
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $saidi['up3']['nama_up3'][0]->nama_ulp }}</td>
                                                @foreach ($saidi['up3']['data'] as $data)
                                                    <td>{{ $data }}</td>
                                                @endforeach
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <!-- Responsive tables start -->
                <section class="section">
                    <div class="row" id="table-responsive">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title alert alert-primary">SAIFI HARIAN</h4>
                                </div>

                                <!-- table responsive -->
                                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                                    <table class="table mb-0 table-hover table-bordered">
                                        <thead class="table-light header">
                                            <tr>

                                                <th>No</th>
                                                <th>Unit Layanan Pelanggan</th>
                                                @for ($hari = 1; $hari <= $jml_hr; $hari++)
                                                    <th>{{ $hari }}</th>
                                                @endfor

                                                {{-- <th scope="col">#</th>
                                                    <th scope="col">Heading 1</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                            @foreach ($saifi['ulp'] as $row)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $row['nama_ulp']->nama_ulp }}</td>
                                                    @foreach ($row['data'] as $data)
                                                        <td>{{ $data }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="table-dark">
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $saifi['up3']['nama_up3'][0]->nama_ulp }}</td>
                                                @foreach ($saifi['up3']['data'] as $data)
                                                    <td>{{ $data }}</td>
                                                @endforeach
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
