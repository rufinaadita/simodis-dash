@extends('layout.template')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible show fade" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible show fade" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Basic File Browser start -->
    <section id="input-file-browser">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">File Input</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            {{-- detail event file import --}}
                            <div class="col-lg-6 col-md-12">
                                <form method="POST" action="/detailEvent/importExcel" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <h5>Detail Event</h5>
                                        <label for="formFile" class="form-label">Input file <i>Detail Event</i> dengan
                                            format
                                            (.xls / .xlsx)</label>
                                        <input class="form-control" name="file" type="file" id="formFile" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary mr-5">
                                            IMPORT EXCEL
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- datatable detail event start --}}
    <!-- Basic File Browser end -->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Event</h3>
                    <p class="text-subtitle text-muted">Detail data from import file excel <i>Detail Event</i></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dash') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DetailEvent</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">

                <div class="card-header">
                    Datatable
                </div>

                <div class="card-body">
                    <form action="{{ url('/truncate/detailevent') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger mb-2"
                            onclick="return confirm('Are you sure to truncate this table?')">Truncate Table</button>
                    </form>
                    {{-- <a href="" class="btn btn-danger mb-2">Truncate Table</a> --}}
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Lapor</th>
                                <th>Kode</th>
                                <th>Jenis</th>
                                <th>ULP</th>
                                {{-- <th>Penyulang</th> --}}
                                <th>Tanggal Padam</th>
                                <th>Jam Padam</th>
                                <th>Tanggal Nyala</th>
                                <th>Jam Nyala</th>
                                {{-- <th>Pelanggan Padam</th> --}}
                                <th>Durasi Padam</th>
                                <th>SAIDI</th>
                                <th>SAIFI</th>
                                <th>Pelanggan Ulp</th>
                                <th>Saidi Ulp</th>
                                <th>Saifi Ulp</th>
                                {{-- <th>Jam X Plg Padam</th> --}}
                                {{-- <th>ENS</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detailevents as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->no_lapor }}</td>
                                    <td>{{ $row->kode }}</td>
                                    <td>{{ $row->jenis }}</td>
                                    <td>{{ $row->ulp }}</td>
                                    {{-- <td>{{ $row->penyulang }}</td> --}}
                                    <td>{{ $row->tgl_padam }}</td>
                                    <td>{{ $row->jam_padam }}</td>
                                    <td>{{ $row->tgl_nyala }}</td>
                                    <td>{{ $row->jam_nyala }}</td>
                                    {{-- <td>{{ $row->pelanggan_padam }}</td> --}}
                                    <td>{{ $row->durasi_padam }}</td>
                                    <td>{{ $row->SAIDI }}</td>
                                    <td>{{ $row->SAIFI }}</td>
                                    <td>{{ $row->plg_ulp }}</td>
                                    <td>{{ $row->saidi_ulp }}</td>
                                    <td>{{ $row->saifi_ulp }}</td>
                                    {{-- <td>{{ $row->jam_pelanggan_padam }}</td>
                                    <td>{{ $row->ens }}</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        {{-- datatable detail event end --}}
    </div>
@endsection
