<?php

namespace App\Http\Controllers;

use App\Models\Detailevent;
use App\Http\Requests\StoreDetaileventRequest;
use App\Http\Requests\UpdateDetaileventRequest;
use App\Imports\DetaileventImport;
use App\Models\Ulp;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetaileventController extends Controller
{
    public function showDash()
    {
        $data = Detailevent::all();
        return view('data.detailevent', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->all();

        if ($filter) {
            $request->validate([
                'bulan' => ['required'],
                'ulp' => ['required'],
            ]);
            $chart = $this->tabelHarian($filter['ulp'], $filter['bulan']);
            $dataHarian = $this->showHarian($filter['bulan']);
        } else {
            $chart = $this->tabelHarian();
            $dataHarian = $this->showHarian();
        }

        $target = $chart['target'];
        $realisasi = $chart['realisasi'];
        $nama_ulp = $chart['nama_ulp'];

        $harian = $dataHarian['harian'];
        $ulp_list = $dataHarian['ulp_list'];
        $up3_name = $dataHarian['up3_name'];

        $ulp_exists = DB::table('ulp')
            ->where('id', 1)
            ->exists();

        return view('index', compact('target', 'harian', 'ulp_list', 'up3_name', 'realisasi', 'nama_ulp', 'ulp_exists'));
    }

    public function chartHarian(Request $request)
    {
        $filter = $request->all();
        if ($filter) {
            $request->validate([
                'bulan' => ['required'],
                'ulp' => ['required'],
            ]);
            $chart = $this->tabelHarian($filter['ulp'], $filter['bulan']);
            $dataHarian = $this->showHarian($filter['bulan']);
        } else {
            $chart = $this->tabelHarian();
            $dataHarian = $this->showHarian();
        }

        $target = $chart['target'];
        $realisasi = $chart['realisasi'];
        $nama_ulp = $chart['nama_ulp'];

        $harian = $dataHarian['harian'];
        $ulp_list = $dataHarian['ulp_list'];
        $up3_name = $dataHarian['up3_name'];

        $ulp_exists = DB::table('ulp')
            ->where('id', 1)
            ->exists();

        return view('data.harian', compact('harian', 'ulp_list', 'up3_name', 'target', 'realisasi', 'nama_ulp', 'ulp_exists'));
    }

    public function importExcel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $namafile = rand() . $file->getClientOriginalName();

        // upload ke folder file_dataMentah didalam folder public
        $file->move('DataMentah', $namafile);

        // import data
        Excel::import(new DetaileventImport, public_path('/DataMentah/' . $namafile));
        // die;

        // notifikasi dengan session
        $datas = Ulp::all();
        if (empty($datas[0])) {
            return back()->with('error', 'ERROR! Database ulp is null');
        } else {
            // alihkan halaman kembali
            return back()->with('success', 'Excel file imported successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // untuk menampilkan seluruh isi tabel realisasi saidi saifi harian
    public function showHarian($bulan = 10)
    {
        $bln = $bulan;
        $ulp_name = DB::table('ulp')
            ->where('nama_ulp', '!=', 'UP3 Pekanbaru')
            ->get();

        $up3 = DB::table('ulp')
            ->where('nama_ulp', '=', 'UP3 Pekanbaru')
            ->get();

        $ulp_list = json_decode($ulp_name);
        $up3_name = json_decode($up3);
        // dd($up3);
        $harian = [];
        $index_saidi = array(
            'ulp' => 'saidi_ulp',
            'up3' => 'SAIDI'
        );
        $index_saifi = array(
            'ulp' => 'saifi_ulp',
            'up3' => 'SAIFI'
        );

        for ($i = 0; $i < count($ulp_list); $i++) {
            $harian['saidi_harian']['ulp'][$i]['nama_ulp'] = $ulp_list[$i];
            $harian['saifi_harian']['ulp'][$i]['nama_ulp'] = $ulp_list[$i];
            $harian['saidi_harian']['ulp'][$i]['data'] = $this->harian($ulp_list[$i]->nama_ulp, $bln, 2021, $index_saidi);
            $harian['saifi_harian']['ulp'][$i]['data'] = $this->harian($ulp_list[$i]->nama_ulp, $bln, 2021, $index_saifi);
        }
        $harian['saidi_harian']['up3']['nama_up3'] = $up3_name;
        $harian['saifi_harian']['up3']['nama_up3'] = $up3_name;
        $harian['saidi_harian']['up3']['data'] = $this->harianUp3($bln, 2021, $index_saidi);
        $harian['saifi_harian']['up3']['data'] = $this->harianUp3($bln, 2021, $index_saifi);

        $harian['bulan'] = $bln;
        $data = array(
            'harian' => $harian,
            'ulp_list' => $ulp_list,
            'up3_name' => $up3_name,
        );

        return $data;
    }

    // untuk mengirim data realisasi per-ulp dan target ulp
    public function tabelHarian($ulp = 'UP3 PEKANBARU', $bulan = 10)
    {
        $ulp_lower = strtolower($ulp);

        $index_saidi = array(
            'ulp' => 'saidi_ulp',
            'up3' => 'SAIDI'
        );
        $index_saifi = array(
            'ulp' => 'saifi_ulp',
            'up3' => 'SAIFI'
        );

        $target = [];
        $realisasi = [];
        $data = [];
        $target['target_saidi'] = $this->targetSaidi($ulp, $bulan);
        $target['target_saifi'] = $this->targetSaifi($ulp, $bulan);

        if ($ulp_lower == 'up3 pekanbaru') {
            $realisasi['harian_saidi'] = $this->releUp3($ulp, $bulan, $index_saidi)['harian'];
            $realisasi['harian_saifi'] = $this->releUp3($ulp, $bulan, $index_saifi)['harian'];
            $realisasi['relekum_saidi'] = $this->releUp3($ulp, $bulan, $index_saidi)['kum'];
            $realisasi['relekum_saifi'] = $this->releUp3($ulp, $bulan, $index_saifi)['kum'];
        } else {
            $realisasi['harian_saidi'] = $this->releUlp($ulp, $bulan, $index_saidi)['harian'];
            $realisasi['harian_saifi'] = $this->releUlp($ulp, $bulan, $index_saifi)['harian'];
            $realisasi['relekum_saidi'] = $this->releUlp($ulp, $bulan, $index_saidi)['kum'];
            $realisasi['relekum_saifi'] = $this->releUlp($ulp, $bulan, $index_saifi)['kum'];
        }

        $data['nama_ulp'] = $ulp;
        $data['target'] = $target;
        $data['realisasi'] = $realisasi;

        // dd($data);
        return $data;
    }

    // untuk mencari nilai saidi saifi berdasarkan ulp
    public function harian($ulp, $bulan, $tahun, $index)
    {
        $bln = $bulan;
        $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, $tahun); //jumlah hari perbulan

        $index_harian = [];
        for ($hari = 1; $hari <= $jml_hr; $hari++) {
            $index_ulp = DB::select("SELECT SUM({$index['ulp']}) as index_ulp FROM detailevents WHERE ulp='{$ulp}' AND day(tgl_nyala)={$hari} AND month(tgl_nyala)={$bln}"); //untuk mengambil nilai saidi berdasarkan ulp, tgl, dan bulan
            if (!$index_ulp[0]->index_ulp) {
                $index_ulp[0]->index_ulp = 0;
            }
            $index_harian[$hari] = $index_ulp[0]->index_ulp;
        }

        return $index_harian;
    }

    public function harianUp3($bulan, $tahun, $index)
    {
        $bln = $bulan;
        $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, $tahun); //jumlah hari perbulan

        // mencari nilai SAIDI Harian UP3
        $index_harian = [];
        for ($hari = 1; $hari <= $jml_hr; $hari++) {

            $index_up3 = DB::select("SELECT SUM({$index['up3']}) as index_up3 FROM detailevents WHERE day(tgl_nyala)={$hari} AND month(tgl_nyala)={$bln}"); // mengambil nilai saidi untuk UP3 Pekanbaru
            if (!$index_up3[0]->index_up3) {
                $index_up3[0]->index_up3 = 0;
            }
            // print_r();
            $index_harian[$hari] = $index_up3[0]->index_up3;
        }

        return $index_harian;
    }

    public function targetSaidi($ulp, $bulan)
    {
        $ulp = $ulp;
        $bln = $bulan;
        $thn = 2021;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, $thn); //jumlah hari perbulan        

        //nilai untuk chart harian
        // mencari target harian dan target kumulatif ulp per bulan
        $ulp_exists = DB::table('ulp')->where('id', 1)->exists();
        // dd($db_null);
        if ($ulp_exists == false) {
            $target = 0;
            return $target;
        } else {
            $target_saidi = DB::table('ulp')->where('nama_ulp', $ulp)->first()->target1_ulp; //mengambil nilai target saidi (target1) sesuai ulp
            $nakh = round($target_saidi / 12 * 0.85, 1); //nilai akhir kumulatif
            $na = round($nakh / $jml_hr, 1); //nilai awal kumulatif
            $kumulatif = [];
            $target_harian = [];
            for ($i = 1; $i <= $jml_hr; $i++) {
                $target_harian[$i] = $na;
                if ($i == 1) {
                    $kumulatif[$i] = $na;
                } else if ($i == $jml_hr) {
                    $kumulatif[$i] = $nakh;
                } else {
                    $kumulatif[$i] = round($na + $kumulatif[$i - 1], 1);
                }
            }

            $target['target_harian'] = $target_harian;
            $target['target_kum'] = $kumulatif;

            return $target;
        }
    }

    public function targetSaifi($ulp, $bulan)
    {
        $ulp = $ulp;
        $bln = $bulan;
        $thn = 2021;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, $thn); //jumlah hari perbulan        

        //nilai untuk chart harian
        // mencari target harian dan target kumulatif ulp per bulan
        $ulp_exists = DB::table('ulp')->where('id', 1)->exists();
        if ($ulp_exists == false) {
            $target = 0;
            return $target;
        } else {
            $target_saifi = DB::table('ulp')->where('nama_ulp', $ulp)->first()->target2_ulp; //mengambil nilai target saifi (target2) sesuai ulp
            $nakh = round($target_saifi / 12 * 0.8, 2); //nilai akhir kumulatif
            $na = round($nakh / $jml_hr, 2); //nilai awal kumulatif
            $kumulatif = [];
            $target_harian = [];
            $target = [];
            for ($i = 1; $i <= $jml_hr; $i++) {
                $target_harian[$i] = $na;
                if ($i == 1) {
                    $kumulatif[$i] = $na;
                } else if ($i == $jml_hr) {
                    $kumulatif[$i] = $nakh;
                } else {
                    $kumulatif[$i] = round($na + $kumulatif[$i - 1], 2);
                }
            }

            $target['target_harian'] = $target_harian;
            $target['target_kum'] = $kumulatif;
            // dd($target);
            return $target;
        }
    }

    public function releUlp($ulp, $bulan, $index)
    {
        $ulp = $ulp;
        $bln = $bulan;
        $thn = 2021;
        // $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, $thn); //jumlah hari perbulan    

        // mencari nilai SAIDI Harian Ulp
        $index_harian = [];
        for ($hari = 1; $hari <= $jml_hr; $hari++) {
            $index_ulp = DB::select("SELECT SUM({$index['ulp']}) as index_ulp FROM detailevents WHERE ulp='{$ulp}' AND day(tgl_nyala)={$hari} AND month(tgl_nyala)={$bln}"); //untuk mengambil nilai saidi berdasarkan ulp, tgl, dan bulan
            if (!$index_ulp[0]->index_ulp) {
                $index_ulp[0]->index_ulp = 0;
            }
            $index_harian[$hari] = $index_ulp[0]->index_ulp;
        }

        // dd($saidi_harian);
        $realisasi['harian'] = $index_harian;
        // $realisasi = $index_harian;

        //realisasi kumulatif ulp
        $realisasi_kum = [];
        for ($x = 1; $x <= $jml_hr; $x++) {
            // echo $x;
            if ($x == 1) {
                $realisasi_kum[$x] = $realisasi['harian'][$x];
            } else {
                // echo $x;
                $realisasi_kum[$x] = $realisasi_kum[$x - 1] + $realisasi['harian'][$x];
            }
        }

        $realisasi['kum'] = $realisasi_kum;

        return $realisasi;
    }

    public function releUp3($ulp, $bulan, $index)
    {
        $ulp = $ulp;
        $bln = $bulan;
        $thn = 2021;
        $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, $thn); //jumlah hari perbulan    

        // mencari nilai SAIDI HARIAN
        $index_harian = [];
        for ($hari = 1; $hari <= $jml_hr; $hari++) {

            $index_up3 = DB::select("SELECT SUM({$index['up3']}) as index_up3 FROM detailevents WHERE day(tgl_nyala)={$hari} AND month(tgl_nyala)={$bln}"); // mengambil nilai saidi untuk UP3 Pekanbaru
            if (!$index_up3[0]->index_up3) {
                $index_up3[0]->index_up3 = 0;
            }
            $index_harian[$hari] = $index_up3[0]->index_up3;
        }
        // dd($index_harian);

        //realisasi kumulatif ulp
        $realisasi['harian'] = $index_harian;
        // $rele_saifi = $index_harian['saifi'];

        $realisasi_kum = [];
        for ($x = 1; $x <= $jml_hr; $x++) {
            // echo $x;
            if ($x == 1) {
                $realisasi_kum[$x] = $realisasi['harian'][$x];
            } else {
                // echo $x;
                $realisasi_kum[$x] = $realisasi_kum[$x - 1] + $realisasi['harian'][$x];
            }
        }
        $realisasi['kum'] = $realisasi_kum;

        return $realisasi;
    }

    public function rankSaidi($ulp = '', $bln = 10)
    {

        $fgtm = DB::select("SELECT month(tgl_nyala) as bulan,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata GROUP BY month(tgl_nyala) ORDER BY month(tgl_nyala) ASC");
        $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata WHERE month(tgl_nyala)={$bln} GROUP BY rayon ORDER BY jml_gangguan DESC");

        if ($ulp == "") {
            $query = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE month(tgl_nyala)={$bln} group by penyulang ORDER BY `ranksaidi` DESC");
        } else {
            $query = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE month(tgl_nyala)={$bln} AND ulp={$ulp} group by penyulang ORDER BY `ranksaidi` DESC");
        }
        $n_gangguan = "";
        $total_gangguan = 0;
        foreach ($kum_gangguan as $value) {
            $n_gangguan .= $value->jml_gangguan . ',';
            $total_gangguan += $value->jml_gangguan;
        }

        // dd($fgtm);
        return view('data.rank', compact('query', 'kum_gangguan', 'fgtm', 'n_gangguan', 'total_gangguan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetaileventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetaileventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detailevent  $detailevent
     * @return \Illuminate\Http\Response
     */
    public function show(Detailevent $detailevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detailevent  $detailevent
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailevent $detailevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetaileventRequest  $request
     * @param  \App\Models\Detailevent  $detailevent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetaileventRequest $request, Detailevent $detailevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detailevent  $detailevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailevent $detailevent)
    {
        //
    }

    public function truncate()
    {
        $truncate = DB::table('detailevents')->truncate();

        return back()->with('success', 'Tabel berhasil dibersihkan!');
    }
}
