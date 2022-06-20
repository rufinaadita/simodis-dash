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
use Session;

class DetaileventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Detailevent::all();
        return view('detailevent', compact('detailevents'));
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
        //Session::flash('sukses', 'Data Berhasil Diimport!');
        $datas = Ulp::all();
        if (empty($datas[0])) {
            // return redirect()->route('data.detailevent')
            //     ->with('status', 'ERROR! Database ulp is null')
            //     ->with('class', 'danger');
            return back()->withError('ERROR! Database ulp is null');
        } else {
            // alihkan halaman kembali
            // return back()
            //     ->with('status', 'Excel file imported successfully!')
            //     ->with('class', 'success');
            return back()->withStatus('Excel file imported successfully');
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

    public function showData()
    {
        $bln = 10;
        $ulp_name = DB::table('ulp')
            ->where('nama_ulp', '!=', 'up3 pekanbaru')
            ->get();

        $up3 = DB::table('ulp')
            ->where('nama_ulp', '=', 'up3 pekanbaru')
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
        // dd($up3_name);
        for ($i = 0; $i < count($ulp_list); $i++) {
            // var_dump($ulp_list[$i]);
            $harian['saidi_harian']['ulp'][$i]['nama_ulp'] = $ulp_list[$i];
            $harian['saifi_harian']['ulp'][$i]['nama_ulp'] = $ulp_list[$i];
            $harian['saidi_harian']['ulp'][$i]['data'] = $this->harian($ulp_list[$i]->nama_ulp, $bln, 2021, $index_saidi);
            $harian['saifi_harian']['ulp'][$i]['data'] = $this->harian($ulp_list[$i]->nama_ulp, $bln, 2021, $index_saifi);
        }
        $harian['saidi_harian']['up3']['nama_up3'] = $up3_name;
        $harian['saifi_harian']['up3']['nama_up3'] = $up3_name;
        $harian['saidi_harian']['up3']['data'] = $this->harianUp3($bln, 2021, $index_saidi);
        $harian['saifi_harian']['up3']['data'] = $this->harianUp3($bln, 2021, $index_saifi);
        // dd($harian);
        // return $harian;

        $harian['bulan'] = $bln;
        return view('data.harian', compact('harian', 'ulp_list', 'up3_name'));
        // dd($harian['saidi_harian'][8]);
    }

    public function harian($ulp, $bulan, $tahun, $index)
    {
        $ulp = $ulp;
        $bln = $bulan;
        $thn = $tahun;
        $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, 2021); //jumlah hari perbulan

        // mencari nilai SAIDI HARIAN
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
        $thn = $tahun;
        $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, 2021); //jumlah hari perbulan

        // mencari nilai SAIDI HARIAN
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

    public function harianSaidi($ulp, $bulan, $tahun)
    {
        // echo "harian";
        $ulp = "Ulp Lipat Kain";
        $bln = $bulan;
        $thn = $tahun;
        $hari = 1;
        $jml_hr = cal_days_in_month(CAL_GREGORIAN, $bln, 2021); //jumlah hari perbulan

        // mencari nilai SAIDI HARIAN
        $saidi_harian = [];
        for ($hari = 1; $hari <= $jml_hr; $hari++) {
            $saidi_ulp = DB::select("SELECT SUM(saidi_ulp) as saidi_ulp FROM detailevents WHERE ulp='{$ulp}' AND day(tgl_nyala)={$hari} AND month(tgl_nyala)={$bln}"); //untuk mengambil nilai saidi berdasarkan ulp, tgl, dan bulan
            if (!$saidi_ulp[0]->saidi_ulp) {
                $saidi_ulp[0]->saidi_ulp = 0;
            }
            $saidi_up3 = DB::select("SELECT SUM(SAIDI) as saidi_up3,  SUM(saidi_ulp) as saidi_ulp FROM detailevents WHERE day(tgl_nyala)={$hari} AND month(tgl_nyala)={$bln}"); // mengambil nilai saidi untuk UP3 Pekanbaru
            // print_r();
            $saidi_harian['ulp'][$hari] = $saidi_ulp[0]->saidi_ulp;
            // $saidi_harian['up3'][$hari] = $saidi_up3;
        }
        // dd($saidi_harian);

        //nilai untuk chart harian
        // mencari target harian dan target kumulatif ulp per bulan
        $target_ulp = DB::table('ulp')->where('nama_ulp', $ulp)->first()->target1_ulp; //mengambil nilai target saidi (target1) sesuai ulp
        $nakh = round($target_ulp / 12 * 0.85, 1); //nilai akhir kumulatif
        $na = round(($target_ulp / 12 * 0.85) / $jml_hr, 1); //nilai awal kumulatif
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
        // print_r($kumulatif);

        //realisasi kumulatif ulp
        $realisasi = [];
        $realisasi = $saidi_harian;
        // print_r();

        $realisasi_kum = [];
        for ($x = 1; $x <= $jml_hr; $x++) {
            // echo $x;
            if ($x == 1) {
                $realisasi_kum[$x] = $realisasi['ulp'][$x];
            } else {
                // echo $x;
                $realisasi_kum[$x] = $realisasi_kum[$x - 1] + $realisasi['ulp'][$x];
            }
        }
        print_r($realisasi_kum);
        // dd($hari);
        // return $target_ulp;
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
}
