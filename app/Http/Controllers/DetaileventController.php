<?php

namespace App\Http\Controllers;

use App\Models\Detailevent;
use App\Http\Requests\StoreDetaileventRequest;
use App\Http\Requests\UpdateDetaileventRequest;
use App\Imports\DetaileventImport;
use App\Models\Masterdata;
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

    public function showRank(Request $request)
    {

        $filter = $request->all();

        if ($request->ulp) {
            $dataRank = $this->rankSaidi($filter['ulp'], 0, 0, "");
        } else if ($request->bulan) {
            $dataRank = $this->rankSaidi("", $filter['bulan'], 0, "");
        } else if ($request->hari) {
            $dataRank = $this->rankSaidi("", 0, $filter['hari'], "");
        } else if ($request->tipe_gangguan) {
            $dataRank = $this->rankSaidi("", 0, 0, $filter['tipe_gangguan']);
        } else {
            $dataRank = $this->rankSaidi();
        }

        $dataHarian = $this->showHarian();

        $ulp_exists = DB::table('ulp')
            ->where('id', 1)
            ->exists();

        $ulp_list = $dataHarian['ulp_list'];
        $harian = $dataHarian['harian'];

        $fgtm = $dataRank['fgtm'];
        $kum_gangguan = $dataRank['kum_gangguan'];
        $rank_saidi = $dataRank['rank_saidi'];
        $kum_penyulang = $dataRank['gg_penyulang'];
        $n_gangguan = $dataRank['n_gangguan'];
        $total_gangguan = $dataRank['total_gangguan'];


        $tipe_ggn = DB::select("SELECT tipe_gangguan FROM masterdata GROUP BY tipe_gangguan");

        // dd($tipe_ggn);
        return view('data.rank', compact('rank_saidi', 'kum_gangguan', 'fgtm', 'n_gangguan', 'total_gangguan', 'kum_penyulang', 'ulp_exists', 'ulp_list', 'harian', 'tipe_ggn'));
    }

    public function rankSaidi($ulp = '', $bln = 0, $hari = 0, $tipe_ggn = '')
    {
        $rank = [];
        $tipe_gangguan = 'temporer';
        $kategori = 'kp';

        $kum_gangguan = "";

        if ($ulp != "" && $bln != 0 && $hari != 0) {
            $rank_saidi = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE month(tgl_nyala)={$bln} AND day(tgl_nyala)={$hari} AND ulp='{$ulp}' group by penyulang ORDER BY `ranksaidi` DESC");
            $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata  GROUP BY rayon ORDER BY jml_gangguan DESC");
        } else if ($ulp != "") {
            $rank_saidi = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE ulp='{$ulp}' group by penyulang ORDER BY `ranksaidi` DESC");
            $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata  GROUP BY rayon ORDER BY jml_gangguan DESC");
        } else if ($bln != 0) {
            $rank_saidi = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE month(tgl_nyala)={$bln} group by penyulang ORDER BY `ranksaidi` DESC");
            $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata WHERE month(tgl_nyala)={$bln} GROUP BY rayon ORDER BY jml_gangguan DESC");
        } else if ($hari != 0) {
            $rank_saidi = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE day(tgl_nyala)={$hari} group by penyulang ORDER BY `ranksaidi` DESC");
        } else if ($tipe_gangguan != "") {
            $rank_saidi = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents WHERE day(tgl_nyala)={$hari} group by penyulang ORDER BY `ranksaidi` DESC");
            $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata WHERE tipe_gangguan='{$tipe_ggn}' GROUP BY rayon ORDER BY jml_gangguan DESC");
        } else {
            $rank_saidi = DB::select("SELECT SUM(saidi_ulp) as ranksaidi, penyulang FROM detailevents group by penyulang ORDER BY `ranksaidi` DESC");
            $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata  GROUP BY rayon ORDER BY jml_gangguan DESC");
        }

        // $kum_gangguan = DB::select("SELECT rayon,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata  GROUP BY rayon ORDER BY jml_gangguan DESC");
        $n_gangguan = "";
        $total_gangguan = 0;
        foreach ($kum_gangguan as $value) {
            $n_gangguan .= $value->jml_gangguan . ',';
            $total_gangguan += $value->jml_gangguan;
        }

        $kum_penyulang = DB::select("SELECT penyulang,COUNT(tipe_gangguan+kategori) as kum_gangguan FROM `masterdata` WHERE month(tgl_nyala)=10 GROUP BY penyulang ORDER BY kum_gangguan DESC");

        $fgtm = DB::select("SELECT month(tgl_nyala) as bulan,COUNT(kategori+tipe_gangguan) as jml_gangguan FROM masterdata GROUP BY month(tgl_nyala) ORDER BY month(tgl_nyala) ASC");

        $rank['fgtm'] = $fgtm;
        $rank['kum_gangguan'] = $kum_gangguan;
        $rank['rank_saidi'] = $rank_saidi;
        $rank['gg_penyulang'] = $kum_penyulang;
        $rank['n_gangguan'] = $n_gangguan;
        $rank['total_gangguan'] = $total_gangguan;

        // dd($fgtm);
        return $rank;
    }

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

    // public function delFilter()
    // {
    //     $dataRank = $this->rankSaidi();
    //     $dataHarian = $this->showHarian();

    //     $ulp_exists = DB::table('ulp')
    //         ->where('id', 1)
    //         ->exists();

    //     $ulp_list = $dataHarian['ulp_list'];
    //     $harian = $dataHarian['harian'];

    //     $fgtm = $dataRank['fgtm'];
    //     $kum_gangguan = $dataRank['kum_gangguan'];
    //     $query = $dataRank['rank_saidi'];
    //     $kum_penyulang = $dataRank['gg_penyulang'];
    //     $n_gangguan = $dataRank['n_gangguan'];
    //     $total_gangguan = $dataRank['total_gangguan'];

    //     return view('data.rank', compact('query', 'kum_gangguan', 'fgtm', 'n_gangguan', 'total_gangguan', 'kum_penyulang', 'ulp_exists', 'ulp_list', 'harian'));
    // }

    public function truncate()
    {
        $truncate = DB::table('detailevents')->truncate();

        return back()->with('success', 'Tabel berhasil dibersihkan!');
    }
}
