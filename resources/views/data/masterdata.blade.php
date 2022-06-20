@extends('layout.template')

@section('content')
    {{-- notifikasi form validasi --}}
    {{-- @if ($errors->has('file'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('file') }}</strong>
        </span>
    @endif --}}

    {{-- notifikasi sukses --}}
    {{-- @if ($sukses = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $sukses }}</strong>
        </div>
    @endif --}}

    <!-- Basic File Browser start -->
    <section id="input-file-browser">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">File Input</h4>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible show fade" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row">
                            {{-- detail event file import --}}
                            <div class="col-lg-6 col-md-12">
                                <form method="POST" action="/masterdata/importExcel" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <h5>Master Data</h5>
                                        <label for="formFile" class="form-label">Input file <i>Master Data</i> dengan
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
    {{-- datatable master data start --}}
    <!-- Basic File Browser end -->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Master Data</h3>
                    <p class="text-subtitle text-muted">Detail data from import file excel <i>Master Data</i></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dash') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">MasterData</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Hoverable rows start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Simple Datatable
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Type Gangguan</th>
                                <th>Nomor Gangguan</th>
                                <th>Penyulang</th>
                                <th>Gardu Induk</th>
                                {{-- <th>Area</th> --}}
                                <th>Rayon</th>
                                <th>Tgl Padam</th>
                                <th>Tgl Nyala</th>
                                <th>Jam Padam Switch</th>
                                <th>Jam Nyala Switch</th>
                                <th>Lama Padam</th>
                                {{-- <th>Beban Sebelum</th>
                                <th>Beban Setelah</th>
                                <th>Arus GGN r</th>
                                <th>Arus GGN s</th>
                                <th>Arus GGN t</th>
                                <th>Arus GGN n</th> --}}
                                {{-- <th>ens</th> --}}
                                {{-- <th>Indikator Rele</th> --}}
                                <th>Kelp Penyebab</th>
                                {{-- <th>Kode Gangguan</th> --}}
                                {{-- <th>Pelaksana Har</th> --}}
                                <th>Titik Padam</th>
                                <th>Jenis</th>
                                {{-- <th>Kategori</th> --}}
                                {{-- <th>Keypoint</th> --}}
                                <th>Jam Padam Switch</th>
                                <th>Jam Nyala Switch</th>
                                <th>Lama Padam</th>
                                {{-- <th>Beban Sebelum</th>
                                <th>Beban Setelah</th> --}}
                                <th>Penyebab Padam</th>
                                {{-- <th>Lokasi Gangguan</th> --}}
                                {{-- <th>Trip Tembus</th> --}}
                                <th>Penormalan</th>
                                <th>Kontrol</th>
                                <th>Dispatcher</th>
                                {{-- <th>Bulan</th> --}}
                                {{-- <th>Hari</th> --}}
                                <th>Padam > 5 mnt</th>
                                <th>Menit Padam</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $row)
                                <tr>
                                    <td>
                                        @if ($row->tipe_gangguan == 'Temporer')
                                            <div class="badges">
                                                <span class="badge bg-success">{{ $row->tipe_gangguan }}</span>

                                            </div>
                                        @endif
                                        @if ($row->tipe_gangguan == 'Permanent')
                                            <div class="badges">
                                                <span class="badge bg-danger">{{ $row->tipe_gangguan }}</span>

                                            </div>
                                        @endif
                                    </td>
                                    <td>{{ $row->nomor_gangguan }}</td>
                                    <td>{{ $row->penyulang }}</td>
                                    <td>{{ $row->gardu_induk }}</td>
                                    {{-- <td>{{ $row->area }}</td> --}}
                                    <td>{{ $row->rayon }}</td>
                                    <td>{{ $row->tgl_padam }}</td>
                                    <td>{{ $row->tgl_nyala }}</td>
                                    <td>{{ $row->j_padam }}</td>
                                    <td>{{ $row->j_nyala }}</td>
                                    <td>{{ $row->lama_padam }}</td>
                                    {{-- <td>{{ $row->bbn_sebelum }}</td>
                                                    <td>{{ $row->bbn_setelah }}</td>
                                                    <td>{{ $row->arus_ggn_r }}</td>
                                                    <td>{{ $row->arus_ggn_s }}</td>
                                                    <td>{{ $row->arus_ggn_t }}</td>
                                                    <td>{{ $row->arus_ggn_n }}</td> --}}
                                    {{-- <td>{{ $row->ens }}</td> --}}
                                    {{-- <td>{{ $row->indikator_rele }}</td> --}}
                                    <td>{{ $row->kel_penyebab }}</td>
                                    {{-- <td>{{ $row->kode_gangguan }}</td> --}}
                                    {{-- <td>{{ $row->p_har }}</td> --}}
                                    <td>{{ $row->titik_pdm }}</td>
                                    <td>{{ $row->jenis }}</td>
                                    {{-- <td>{{ $row->kategori }}</td> --}}
                                    {{-- <td>{{ $row->keypoint }}</td> --}}
                                    <td>{{ $row->js_padam }}</td>
                                    <td>{{ $row->js_nyala }}</td>
                                    <td>{{ $row->lama_padam_sw }}</td>
                                    {{-- <td>{{ $row->bbn_sw_sebelum }}</td>
                                                    <td>{{ $row->bbn_sw_setelah }}</td> --}}
                                    <td>{{ $row->penyebab_pdm }}</td>
                                    {{-- <td>{{ $row->lokasi_gangguan }}</td> --}}
                                    {{-- <td>{{ $row->trip_tembus }}</td> --}}
                                    <td>{{ $row->penormalan }}</td>
                                    <td>{{ $row->kontrol }}</td>
                                    <td>{{ $row->dispatcher }}</td>
                                    {{-- <td>{{ $row->bulan }}</td> --}}
                                    {{-- <td>{{ $row->hari }}</td> --}}
                                    <td>{{ $row->pdm_5mnt }}</td>
                                    <td>{{ $row->menit_pdm }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
