<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailevent;
use App\Http\Requests\StoreDetaileventRequest;
use App\Http\Requests\UpdateDetaileventRequest;
use App\Imports\DetaileventImport;
use App\Models\Masterdata;
use App\Models\Ulp;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class KehandalanController extends Controller
{
    public function index(){

        $noarraySAIDI = array();
        $jumlahTArray = array();
        $jumlahT = array();
        $noarray1=array();
        $noarray2=array();
        $noarray3=array();
        $noarray4=array();
        $noarray5=array();
        $noarray6=array();
        $noarray7=array();
        $noarray8=array();
        $noarray9=array();
        $noarray10=array();
        $noarray11=array();
        $noarray12=array();
        $noarray13=array();

        $noarray1P=array();
        $noarray2P=array();
        $noarray3P=array();
        $noarray4P=array();
        $noarray5P=array();
        $noarray6P=array();
        $noarray7P=array();
        $noarray8P=array();
        $noarray9P=array();
        $noarray10P=array();
        $noarray11P=array();
        $noarray12P=array();
        $noarray13P=array();

        $noarray1T=array();
        $noarray2T=array();
        $noarray3T=array();
        $noarray4T=array();
        $noarray5T=array();
        $noarray6T=array();
        $noarray7T=array();
        $noarray8T=array();
        $noarray9T=array();
        $noarray10T=array();
        $noarray11T=array();
        $noarray12T=array();
        $noarray13T=array();

        $noarray1PMT = array();
        $noarray2PMT = array();
        $noarray3PMT = array();
        $noarray4PMT = array();
        $noarray5PMT = array();
        $noarray6PMT = array();
        $noarray7PMT = array();
        $noarray8PMT = array();
        $noarray9PMT = array();
        $noarray10PMT = array();
        $noarray11PMT = array();
        $noarray12PMT = array();
        $noarray13PMT = array();

        $noarray1P_PMT = array();
        $noarray2P_PMT = array();
        $noarray3P_PMT = array();
        $noarray4P_PMT = array();
        $noarray5P_PMT = array();
        $noarray6P_PMT = array();
        $noarray7P_PMT = array();
        $noarray8P_PMT = array();
        $noarray9P_PMT = array();
        $noarray10P_PMT = array();
        $noarray11P_PMT = array();
        $noarray12P_PMT = array();
        $noarray13P_PMT = array();

        $noarray1T_PMT = array();
        $noarray2T_PMT = array();
        $noarray3T_PMT = array();
        $noarray4T_PMT = array();
        $noarray5T_PMT = array();
        $noarray6T_PMT = array();
        $noarray7T_PMT = array();
        $noarray8T_PMT = array();
        $noarray9T_PMT = array();
        $noarray10T_PMT = array();
        $noarray11T_PMT = array();
        $noarray12T_PMT = array();
        $noarray13T_PMT = array();

        $l1 = 0;
        $l2 = 0;
        $l3 = 0;
        $l4 = 0;
        $l5 = 0;
        $l6 = 0;
        $l7 = 0;
        $l8 = 0;
        $l9 = 0;
        $l10 = 0;
        $l11 = 0;
        $l12 = 0;
        $l13 = 0;

        $p1 = 0;
        $p2 = 0;
        $p3 = 0;
        $p4 = 0;
        $p5 = 0;
        $p6 = 0;
        $p7 = 0;
        $p8 = 0;
        $p9 = 0;
        $p10 = 0;
        $p11 = 0;
        $p12 = 0;
        $p13 = 0;

        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        $t4 = 0;
        $t5 = 0;
        $t6 = 0;
        $t7 = 0;
        $t8 = 0;
        $t9 = 0;
        $t10 = 0;
        $t11 = 0;
        $t12 = 0;
        $t13 = 0;
    
        $k = 0;
        $temporer = 0;
        $permanen = 0;
        $jumlahtotal=array();
        $jumlahtotalpermanen=array();
        $jumlahtotaltemporer=array();

        $performa1 = 0;
        $performa2 = 0;
        $performa3 = 0;
        $performa4 = 0;
        $performa5 = 0;
        $performa6 = 0;
        $performa7 = 0;
        $performa8 = 0;
        $performa9 = 0;
        $performa10 = 0;
        $performa11 = 0;
        $performa12 = 0;
        $performa13 = 0;
        $performatotal = 0;
        $performatotalpermanen = 0;
        $performatotaltemporer = 0;

        //permanen
        $performa1P = 0;
        $performa2P = 0;
        $performa3P = 0;
        $performa4P = 0;
        $performa5P = 0;
        $performa6P = 0;
        $performa7P = 0;
        $performa8P = 0;
        $performa9P = 0;
        $performa10P = 0;
        $performa11P = 0;
        $performa12P = 0;
        $performa13P = 0;

        $performarray1P=array();
        $performarray2P=array();
        $performarray3P=array();
        $performarray4P=array();
        $performarray5P=array();
        $performarray6P=array();
        $performarray7P=array();
        $performarray8P=array();
        $performarray9P=array();
        $performarray10P=array();
        $performarray11P=array();
        $performarray12P=array();
        $performarray13P=array();

        // temporer
        $performa1T = 0;
        $performa2T = 0;
        $performa3T = 0;
        $performa4T = 0;
        $performa5T = 0;
        $performa6T = 0;
        $performa7T = 0;
        $performa8T = 0;
        $performa9T = 0;
        $performa10T = 0;
        $performa11T = 0;
        $performa12T = 0;
        $performa13T = 0;

        $performarray1T=array();
        $performarray2T=array();
        $performarray3T=array();
        $performarray4T=array();
        $performarray5T=array();
        $performarray6T=array();
        $performarray7T=array();
        $performarray8T=array();
        $performarray9T=array();
        $performarray10T=array();
        $performarray11T=array();
        $performarray12T=array();
        $performarray13T=array();

        $performarray1=array();
        $performarray2=array();
        $performarray3=array();
        $performarray4=array();
        $performarray5=array();
        $performarray6=array();
        $performarray7=array();
        $performarray8=array();
        $performarray9=array();
        $performarray10=array();
        $performarray11=array();
        $performarray12=array();
        $performarray13=array();
        $performarraytotal=array();
        $performarraytotalpermanen=array();
        $performarraytotaltemporer=array();
        $penyulangAr = array();
        $penyulangAll = array();
        for ($i=1; $i < 13; $i++) { 
        //  All trip  
        $namaDaerah = array('Kota Barat', 'Kota Timur','Panam','Simpang Tiga','Rumbai','Kampar','Bangkinang','Ujung Batu','Pasir Pangaraian','Siak Sri Indrapura','Perawang','Pangkalan Kerinci','Lipat Kain');
        $Alldata = DB::table("masterdata")->where('bulan',$i)->get();
        $z = 0;
        $n = 0;
        $penyulang = 0;
        $pengurang = 0;
        $Dr = array();
        $DrP = array();
        $DrT = array();
        for ($j=0; $j < 13; $j++ ){ 
            
        
        foreach($Alldata as $data){
            if($data->rayon == $namaDaerah[$j]){
             $z = 1 + $n;
             $n = $z;   

            }
            if($data->penyulang == "GIKP-PRAMBANAN-CB"){
                $penyulang = 1 + $pengurang;
                $pengurang = $penyulang;   
   
               }  

               $penyulangAll[] = $data->penyulang;
        }
        //filter top 10 gangguan per penyulang
        $h = 0;
        $tunggu = array();
        $filt = array_unique($penyulangAll);
        $filt = array_values($filt);
        
        for ($k=0; $k < count($filt); $k++) { 
            $nt = array();
            foreach($Alldata as $data){
                if($data->penyulang==$filt[$k]){
                    $nt[] = array($data->penyulang);
                    $h = count($nt);
                    $tunggu[$k]=$h;
                }
                
            }
            
           
        }
        $topgangguan = array();
        for ($k=0; $k < 76; $k++) { 
            
        }
        
        $penyulangAr[$i-1] = $penyulang;
        $penyulang = 0;
        $pengurang = 0;
        $Dr[$j][$i] = $z;
        $z = 0;
        $n = 0;
        
    }
   
        $noarray1[$i]=$Dr[0][$i];
        $noarray2[$i]=$Dr[1][$i];
        $noarray3[$i]=$Dr[2][$i];
        $noarray4[$i]=$Dr[3][$i];
        $noarray5[$i]=$Dr[4][$i];
        $noarray6[$i]=$Dr[5][$i];
        $noarray7[$i]=$Dr[6][$i];
        $noarray8[$i]=$Dr[7][$i];
        $noarray9[$i]=$Dr[8][$i];
        $noarray10[$i]=$Dr[9][$i];
        $noarray11[$i]=$Dr[10][$i];
        $noarray12[$i]=$Dr[11][$i];
        $noarray13[$i]=$Dr[12][$i];


        // permanen 

        for ($j=0; $j < 13; $j++ ){ 
            
        
            foreach($Alldata as $data){
                if($data->rayon == $namaDaerah[$j] && $data->tipe_gangguan == "Permanent"){
                 $z = 1 + $n;
                
                 $n = $z;   
                }  
                 
            }
            $DrP[$j][$i] = $z;
            $z = 0;
            $n = 0;
        }

        $noarray1P[$i]=$DrP[0][$i];
        $noarray2P[$i]=$DrP[1][$i];
        $noarray3P[$i]=$DrP[2][$i];
        $noarray4P[$i]=$DrP[3][$i];
        $noarray5P[$i]=$DrP[4][$i];
        $noarray6P[$i]=$DrP[5][$i];
        $noarray7P[$i]=$DrP[6][$i];
        $noarray8P[$i]=$DrP[7][$i];
        $noarray9P[$i]=$DrP[8][$i];
        $noarray10P[$i]=$DrP[9][$i];
        $noarray11P[$i]=$DrP[10][$i];
        $noarray12P[$i]=$DrP[11][$i];
        $noarray13P[$i]=$DrP[12][$i];
    
        //Temporer
        for ($j=0; $j < 13; $j++ ){ 
            
        
            foreach($Alldata as $data){
                if($data->rayon == $namaDaerah[$j] && $data->tipe_gangguan == "Temporer"){
                 $z = 1 + $n;
                
                 $n = $z;   
                }  
                 
            }
            $DrT[$j][$i] = $z;
            $z = 0;
            $n = 0;
        }

        $noarray1T[$i]=$DrT[0][$i];
        $noarray2T[$i]=$DrT[1][$i];
        $noarray3T[$i]=$DrT[2][$i];
        $noarray4T[$i]=$DrT[3][$i];
        $noarray5T[$i]=$DrT[4][$i];
        $noarray6T[$i]=$DrT[5][$i];
        $noarray7T[$i]=$DrT[6][$i];
        $noarray8T[$i]=$DrT[7][$i];
        $noarray9T[$i]=$DrT[8][$i];
        $noarray10T[$i]=$DrT[9][$i];
        $noarray11T[$i]=$DrT[10][$i];
        $noarray12T[$i]=$DrT[11][$i];
        $noarray13T[$i]=$DrT[12][$i];
      
     //Gangguan pada kategori PMT
    
        //  All trip
        $Dr_PMT = array();
        $DrP_PMT = array();
        $DrT_PMT = array();  
        for ($j=0; $j < 13; $j++ ){ 
            
        
            foreach($Alldata as $data){
                if($data->rayon == $namaDaerah[$j] && $data->kategori == "PMT"){
                 $z = 1 + $n;
                
                 $n = $z;   
                }    
            }
            $Dr_PMT[$j][$i] = $z;
            $z = 0;
            $n = 0;
        }
        

        $noarray1PMT[$i]=$Dr_PMT[0][$i];
        $noarray2PMT[$i]=$Dr_PMT[1][$i];
        $noarray3PMT[$i]=$Dr_PMT[2][$i];
        $noarray4PMT[$i]=$Dr_PMT[3][$i];
        $noarray5PMT[$i]=$Dr_PMT[4][$i];
        $noarray6PMT[$i]=$Dr_PMT[5][$i];
        $noarray7PMT[$i]=$Dr_PMT[6][$i];
        $noarray8PMT[$i]=$Dr_PMT[7][$i];
        $noarray9PMT[$i]=$Dr_PMT[8][$i];
        $noarray10PMT[$i]=$Dr_PMT[9][$i];
        $noarray11PMT[$i]=$Dr_PMT[10][$i];
        $noarray12PMT[$i]=$Dr_PMT[11][$i];
        $noarray13PMT[$i]=$Dr_PMT[12][$i];


        // permanen 

        for ($j=0; $j < 13; $j++ ){ 
            
        
            foreach($Alldata as $data){
                if($data->rayon == $namaDaerah[$j] && $data->kategori == "PMT" && $data->tipe_gangguan == "Permanent"){
                 $z = 1 + $n;
                
                 $n = $z;   
                }  
                 
            }
            $DrP_PMT[$j][$i] = $z;
            $z = 0;
            $n = 0;
        }
        $noarray1P_PMT[$i]=$DrP_PMT[0][$i];
        $noarray2P_PMT[$i]=$DrP_PMT[1][$i];
        $noarray3P_PMT[$i]=$DrP_PMT[2][$i];
        $noarray4P_PMT[$i]=$DrP_PMT[3][$i];
        $noarray5P_PMT[$i]=$DrP_PMT[4][$i];
        $noarray6P_PMT[$i]=$DrP_PMT[5][$i];
        $noarray7P_PMT[$i]=$DrP_PMT[6][$i];
        $noarray8P_PMT[$i]=$DrP_PMT[7][$i];
        $noarray9P_PMT[$i]=$DrP_PMT[8][$i];
        $noarray10P_PMT[$i]=$DrP_PMT[9][$i];
        $noarray11P_PMT[$i]=$DrP_PMT[10][$i];
        $noarray12P_PMT[$i]=$DrP_PMT[11][$i];
        $noarray13P_PMT[$i]=$DrP_PMT[12][$i];
    
        //Temporer
        for ($j=0; $j < 13; $j++ ){ 
            
        
            foreach($Alldata as $data){
                if($data->rayon == $namaDaerah[$j] && $data->kategori == "PMT" && $data->tipe_gangguan == "Temporer"){
                 $z = 1 + $n;
                
                 $n = $z;   
                }  
                 
            }
            $DrT_PMT[$j][$i] = $z;
            $z = 0;
            $n = 0;
        }
        $noarray1T_PMT[$i]=$DrT_PMT[0][$i];
        $noarray2T_PMT[$i]=$DrT_PMT[1][$i];
        $noarray3T_PMT[$i]=$DrT_PMT[2][$i];
        $noarray4T_PMT[$i]=$DrT_PMT[3][$i];
        $noarray5T_PMT[$i]=$DrT_PMT[4][$i];
        $noarray6T_PMT[$i]=$DrT_PMT[5][$i];
        $noarray7T_PMT[$i]=$DrT_PMT[6][$i];
        $noarray8T_PMT[$i]=$DrT_PMT[7][$i];
        $noarray9T_PMT[$i]=$DrT_PMT[8][$i];
        $noarray10T_PMT[$i]=$DrT_PMT[9][$i];
        $noarray11T_PMT[$i]=$DrT_PMT[10][$i];
        $noarray12T_PMT[$i]=$DrT_PMT[11][$i];
        $noarray13T_PMT[$i]=$DrT_PMT[12][$i];



        
    }   

    
// ALL SEGMEN      

        // Jumlah Permanen dan permanen dan All
        $jumlahArray = array();
        $jumlahtotal=array();
        $jumlahtotalpermanen=array();
        $jumlahPArray = array();
        $jumlahP = array($noarray1P,$noarray2P,$noarray3P,$noarray4P,$noarray5P,$noarray6P,$noarray7P,$noarray8P,$noarray9P,$noarray10P,$noarray11P,$noarray12P,$noarray13P);
        $jumlah = array($noarray1,$noarray2,$noarray3,$noarray4,$noarray5,$noarray6,$noarray7,$noarray8,$noarray9,$noarray10,$noarray11,$noarray12,$noarray13);

        $jumlahtotaltemporer=array();
        $jumlahTArray = array();
        $jumlahT = array($noarray1T,$noarray2T,$noarray3T,$noarray4T,$noarray5T,$noarray6T,$noarray7T,$noarray8T,$noarray9T,$noarray10T,$noarray11T,$noarray12T,$noarray13T);

        for ($i=0; $i < 12; $i++){ 
            
            for ($j=0; $j < 13; $j++) { 
                $jumlahTArray[$i][$j] = $jumlahT[$j][$i+1]; 
                $jumlahPArray[$i][$j] = $jumlahP[$j][$i+1];
                $jumlahArray[$i][$j] = $jumlah[$j][$i+1];
            }
           
            $jumlahtotalpermanen[$i] = array_sum($jumlahPArray[$i]);
            $jumlahtotaltemporer[$i] = array_sum($jumlahTArray[$i]);
            $jumlahtotal[$i] = array_sum($jumlahArray[$i]);
        
        }
        
       
        
        for ($i=1; $i < 13; $i++) { 
            $performa1 = $noarray1[$i]-$l1;
            $performa2 = $noarray2[$i]-$l2;
            $performa3 = $noarray3[$i]-$l3;
            $performa4 = $noarray4[$i]-$l4;
            $performa5 = $noarray5[$i]-$l5;
            $performa6 = $noarray6[$i]-$l6;
            $performa7 = $noarray7[$i]-$l7;
            $performa8 = $noarray8[$i]-$l8;
            $performa9 = $noarray9[$i]-$l9;
            $performa10 = $noarray10[$i]-$l10;
            $performa11 = $noarray11[$i]-$l11;
            $performa12 = $noarray12[$i]-$l12;
            $performa13 = $noarray13[$i]-$l13;
            $performatotal = $jumlahtotal[$i-1]-$k;
            $performatotalpermanen = $jumlahtotalpermanen[$i-1]-$permanen;
            $performatotaltemporer = $jumlahtotaltemporer[$i-1]-$temporer;
    
            //permanen
            $performa1P = $noarray1P[$i]-$p1;
            $performa2P = $noarray2P[$i]-$p2;
            $performa3P = $noarray3P[$i]-$p3;
            $performa4P = $noarray4P[$i]-$p4;
            $performa5P = $noarray5P[$i]-$p5;
            $performa6P = $noarray6P[$i]-$p6;
            $performa7P = $noarray7P[$i]-$p7;
            $performa8P = $noarray8P[$i]-$p8;
            $performa9P = $noarray9P[$i]-$p9;
            $performa10P = $noarray10P[$i]-$p10;
            $performa11P = $noarray11P[$i]-$p11;
            $performa12P = $noarray12P[$i]-$p12;
            $performa13P = $noarray13P[$i]-$p13;

            //Temporer
            $performa1T = $noarray1T[$i]-$t1;
            $performa2T = $noarray2T[$i]-$t2;
            $performa3T = $noarray3T[$i]-$t3;
            $performa4T = $noarray4T[$i]-$t4;
            $performa5T = $noarray5T[$i]-$t5;
            $performa6T = $noarray6T[$i]-$t6;
            $performa7T = $noarray7T[$i]-$t7;
            $performa8T = $noarray8T[$i]-$t8;
            $performa9T = $noarray9T[$i]-$t9;
            $performa10T = $noarray10T[$i]-$t10;
            $performa11T = $noarray11T[$i]-$t11;
            $performa12T = $noarray12T[$i]-$t12;
            $performa13T = $noarray13T[$i]-$t13;
    
            $l1 = $noarray1[$i];
            $l2 = $noarray2[$i];
            $l3 = $noarray3[$i];
            $l4 = $noarray4[$i];
            $l5 = $noarray5[$i];
            $l6 = $noarray6[$i];
            $l7 = $noarray7[$i];
            $l8 = $noarray8[$i];
            $l9 = $noarray9[$i];
            $l10 = $noarray10[$i];
            $l11 = $noarray11[$i];
            $l12 = $noarray12[$i];
            $l13 = $noarray13[$i];

            $p1 = $noarray1P[$i];
            $p2 = $noarray2P[$i];
            $p3 = $noarray3P[$i];
            $p4 = $noarray4P[$i];
            $p5 = $noarray5P[$i];
            $p6 = $noarray6P[$i];
            $p7 = $noarray7P[$i];
            $p8 = $noarray8P[$i];
            $p9 = $noarray9P[$i];
            $p10 = $noarray10P[$i];
            $p11 = $noarray11P[$i];
            $p12 = $noarray12P[$i];
            $p13 = $noarray13P[$i];

            $t1 = $noarray1T[$i];
            $t2 = $noarray2T[$i];
            $t3 = $noarray3T[$i];
            $t4 = $noarray4T[$i];
            $t5 = $noarray5T[$i];
            $t6 = $noarray6T[$i];
            $t7 = $noarray7T[$i];
            $t8 = $noarray8T[$i];
            $t9 = $noarray9T[$i];
            $t10 = $noarray10T[$i];
            $t11 = $noarray11T[$i];
            $t12 = $noarray12T[$i];
            $t13 = $noarray13T[$i];

            $k = $jumlahtotal[$i-1];

            $permanen = $jumlahtotalpermanen[$i-1];

            $temporer = $jumlahtotaltemporer[$i-1];
            
            $performarray1[$i]=$performa1;
            $performarray2[$i]=$performa2;
            $performarray3[$i]=$performa3;
            $performarray4[$i]=$performa4;
            $performarray5[$i]=$performa5;
            $performarray6[$i]=$performa6;
            $performarray7[$i]=$performa7;
            $performarray8[$i]=$performa8;
            $performarray9[$i]=$performa9;
            $performarray10[$i]=$performa10;
            $performarray11[$i]=$performa11;
            $performarray12[$i]=$performa12;
            $performarray13[$i]=$performa13;

            $performarray1P[$i]=$performa1P;
            $performarray2P[$i]=$performa2P;
            $performarray3P[$i]=$performa3P;
            $performarray4P[$i]=$performa4P;
            $performarray5P[$i]=$performa5P;
            $performarray6P[$i]=$performa6P;
            $performarray7P[$i]=$performa7P;
            $performarray8P[$i]=$performa8P;
            $performarray9P[$i]=$performa9P;
            $performarray10P[$i]=$performa10P;
            $performarray11P[$i]=$performa11P;
            $performarray12P[$i]=$performa12P;
            $performarray13P[$i]=$performa13P;

            $performarray1T[$i]=$performa1T;
            $performarray2T[$i]=$performa2T;
            $performarray3T[$i]=$performa3T;
            $performarray4T[$i]=$performa4T;
            $performarray5T[$i]=$performa5T;
            $performarray6T[$i]=$performa6T;
            $performarray7T[$i]=$performa7T;
            $performarray8T[$i]=$performa8T;
            $performarray9T[$i]=$performa9T;
            $performarray10T[$i]=$performa10T;
            $performarray11T[$i]=$performa11T;
            $performarray12T[$i]=$performa12T;
            $performarray13T[$i]=$performa13T;

            $performarraytotal[$i]=$performatotal;
            $performarraytotalpermanen[$i]=$performatotalpermanen;
            $performarraytotaltemporer[$i]=$performatotaltemporer;
    

            
        }
        // SEGMEN PMT
        // Jumlah Permanen dan permanen dan All
        $jumlahArray_PMT = array();
        $jumlahtotal_PMT=array();
        $jumlahtotalpermanen_PMT=array();
        $jumlahPArray_PMT = array();
        $jumlahP_PMT = array($noarray1P_PMT,$noarray2P_PMT,$noarray3P_PMT,$noarray4P_PMT,$noarray5P_PMT,$noarray6P_PMT,$noarray7P_PMT,$noarray8P_PMT,$noarray9P_PMT,$noarray10P_PMT,$noarray11P_PMT,$noarray12P_PMT,$noarray13P_PMT);
        $jumlah_PMT = array($noarray1PMT,$noarray2PMT,$noarray3PMT,$noarray4PMT,$noarray5PMT,$noarray6PMT,$noarray7PMT,$noarray8PMT,$noarray9PMT,$noarray10PMT,$noarray11PMT,$noarray12PMT,$noarray13PMT);

        $jumlahtotaltemporer_PMT=array();
        $jumlahTArray_PMT = array();
        $jumlahT_PMT = array($noarray1T_PMT,$noarray2T_PMT,$noarray3T_PMT,$noarray4T_PMT,$noarray5T_PMT,$noarray6T_PMT,$noarray7T_PMT,$noarray8T_PMT,$noarray9T_PMT,$noarray10T_PMT,$noarray11T_PMT,$noarray12T_PMT,$noarray13T_PMT);

        for ($i=0; $i < 12; $i++){ 
            
            for ($j=0; $j < 13; $j++) { 
                $jumlahTArray_PMT[$i][$j] = $jumlahT_PMT[$j][$i+1]; 
                $jumlahPArray_PMT[$i][$j] = $jumlahP_PMT[$j][$i+1];
                $jumlahArray_PMT[$i][$j] = $jumlah_PMT[$j][$i+1];
            }
           
            $jumlahtotalpermanen_PMT[$i] = array_sum($jumlahPArray_PMT[$i]);
            $jumlahtotaltemporer_PMT[$i] = array_sum($jumlahTArray_PMT[$i]);
            $jumlahtotal_PMT[$i] = array_sum($jumlahArray_PMT[$i]);
        
        }
        $noarraySAIFI = array();
        //menghitung performa PLN
        $perform_PMT = array();
        $pmt = 0;
        $pmttotal = 0;
        $pmtPtotal = 0;
        $pmtTtotal = 0;
        $performa = 0;
        $performaP = 0;
        $performaT = 0;
        $performatotal = 0;
        $performtotal_PMT = array();
        $noarrayPMTTotal = array($noarray1PMT,$noarray2PMT,$noarray3PMT,$noarray4PMT,$noarray5PMT,$noarray6PMT,$noarray7PMT,$noarray8PMT,$noarray9PMT,$noarray10PMT,$noarray11PMT,$noarray12PMT,$noarray13PMT);
        $noarrayPMTTotal_temporal = array($noarray1T_PMT,$noarray2T_PMT,$noarray3T_PMT,$noarray4T_PMT,$noarray5T_PMT,$noarray6T_PMT,$noarray7T_PMT,$noarray8T_PMT,$noarray9T_PMT,$noarray10T_PMT,$noarray11T_PMT,$noarray12T_PMT,$noarray13T_PMT);
        $noarrayPMTTotal_permanen = array($noarray1P_PMT,$noarray2P_PMT,$noarray3P_PMT,$noarray4P_PMT,$noarray5P_PMT,$noarray6P_PMT,$noarray7P_PMT,$noarray8P_PMT,$noarray9P_PMT,$noarray10P_PMT,$noarray11P_PMT,$noarray12P_PMT,$noarray13P_PMT);
        $performtotalP_PMT = array();
        $performtotalT_PMT = array();

        $performaTTotal_PMT = 0;
        $Ttotal = 0;
        $performTtotal_PMT = array();

        $performaPermanenTotal_PMT = 0;
        $Ptotal = 0;
        $performPermanentotal_PMT = array();

        for ($i=1; $i <= 13;  $i++) { 
            
            

            for ($j=0; $j < 12; $j++) { 
                $performa = $noarrayPMTTotal[$i-1][$j+1]-$pmt;
                $perform_PMT[$i-1][$j] = $performa;  
                $pmt = $noarrayPMTTotal[$i-1][$j+1];
                
                $performaP = $noarrayPMTTotal_permanen[$i-1][$j+1]-$pmtPtotal;
                $performtotalP_PMT[$i-1][$j] = $performaP;  
                $pmtPtotal = $noarrayPMTTotal_permanen[$i-1][$j+1];

                $performaT = $noarrayPMTTotal_temporal[$i-1][$j+1]-$pmtTtotal;
                $performtotalT_PMT[$i-1][$j] = $performaT;  
                $pmtTtotal = $noarrayPMTTotal_temporal[$i-1][$j+1];

                $performatotal = $jumlahtotal_PMT[$j]-$pmttotal;
                $performtotal_PMT[$j] = $performatotal;
                $pmttotal = $jumlahtotal_PMT[$j];

                $performaTTotal_PMT = $jumlahtotaltemporer_PMT[$j]-$Ttotal;
                $performTtotal_PMT[$j] = $performaTTotal_PMT;
                $Ttotal = $jumlahtotaltemporer_PMT[$j];

                $performaPermanenTotal_PMT = $jumlahtotalpermanen_PMT[$j]-$Ptotal;
                $performPermanentotal_PMT[$j] = $performaPermanenTotal_PMT;
                $Ptotal = $jumlahtotalpermanen_PMT[$j];
            }

            
        } 

        // Segmen Keypoint
        $noarrayKeypoint = array();
        $noarrayPermanenKeypoint = array();
        $noarrayTemporerKeypoint = array();
        for ($i=1; $i < 13; $i++) { 
            //  All trip  
        $namaDaerah = array('Kota Barat', 'Kota Timur','Panam','Simpang Tiga','Rumbai','Kampar','Bangkinang','Ujung Batu','Pasir Pangaraian','Siak Sri Indrapura','Perawang','Pangkalan Kerinci','Lipat Kain');
        $Alldata = DB::table("masterdata")->where('bulan',$i)->get();
        $z = 0;
        $n = 0;
        $Dr_Keypoint = array();
        $DrP_Keypoint = array();
        $DrT_Keypoint = array();  
        for ($j=0; $j < 13; $j++ ){ 
            
        
            foreach($Alldata as $data){
                if($data->rayon == $namaDaerah[$j] && $data->kategori == "KP"){
                 $z = 1 + $n;
                
                 $n = $z;   
                }    
            }
            $Dr_Keypoint[$j][$i] = $z;
            $z = 0;
            $n = 0;
        }
    
            $noarrayKeypoint[0][$i]=$Dr_Keypoint[0][$i];
            $noarrayKeypoint[1][$i]=$Dr_Keypoint[1][$i];
            $noarrayKeypoint[2][$i]=$Dr_Keypoint[2][$i];
            $noarrayKeypoint[3][$i]=$Dr_Keypoint[3][$i];
            $noarrayKeypoint[4][$i]=$Dr_Keypoint[4][$i];
            $noarrayKeypoint[5][$i]=$Dr_Keypoint[5][$i];
            $noarrayKeypoint[6][$i]=$Dr_Keypoint[6][$i];
            $noarrayKeypoint[7][$i]=$Dr_Keypoint[7][$i];
            $noarrayKeypoint[8][$i]=$Dr_Keypoint[8][$i];
            $noarrayKeypoint[9][$i]=$Dr_Keypoint[9][$i];
            $noarrayKeypoint[10][$i]=$Dr_Keypoint[10][$i];
            $noarrayKeypoint[11][$i]=$Dr_Keypoint[11][$i];
            $noarrayKeypoint[12][$i]=$Dr_Keypoint[12][$i];
            
    
            // permanen 
    
            for ($j=0; $j < 13; $j++ ){ 
            
        
                foreach($Alldata as $data){
                    if($data->rayon == $namaDaerah[$j] && $data->kategori == "KP" && $data->tipe_gangguan == "Permanent"){
                     $z = 1 + $n;
                    
                     $n = $z;   
                    }  
                     
                }
                $DrP_Keypoint[$j][$i] = $z;
                $z = 0;
                $n = 0;
            }
    
            $noarrayPermanenKeypoint[0][$i]=$DrP_Keypoint[0][$i];
            $noarrayPermanenKeypoint[1][$i]=$DrP_Keypoint[1][$i];
            $noarrayPermanenKeypoint[2][$i]=$DrP_Keypoint[2][$i];
            $noarrayPermanenKeypoint[3][$i]=$DrP_Keypoint[3][$i];
            $noarrayPermanenKeypoint[4][$i]=$DrP_Keypoint[4][$i];
            $noarrayPermanenKeypoint[5][$i]=$DrP_Keypoint[5][$i];
            $noarrayPermanenKeypoint[6][$i]=$DrP_Keypoint[6][$i];
            $noarrayPermanenKeypoint[7][$i]=$DrP_Keypoint[7][$i];
            $noarrayPermanenKeypoint[8][$i]=$DrP_Keypoint[8][$i];
            $noarrayPermanenKeypoint[9][$i]=$DrP_Keypoint[9][$i];
            $noarrayPermanenKeypoint[10][$i]=$DrP_Keypoint[10][$i];
            $noarrayPermanenKeypoint[11][$i]=$DrP_Keypoint[11][$i];
            $noarrayPermanenKeypoint[12][$i]=$DrP_Keypoint[12][$i];
        
            //Temporer
            for ($j=0; $j < 13; $j++ ){ 
            
        
                foreach($Alldata as $data){
                    if($data->rayon == $namaDaerah[$j] && $data->kategori == "KP" && $data->tipe_gangguan == "Temporer"){
                     $z = 1 + $n;
                    
                     $n = $z;   
                    }  
                     
                }
                $DrT_Keypoint[$j][$i] = $z;
                $z = 0;
                $n = 0;

            }
            $noarrayTemporerKeypoint[0][$i]=$DrT_Keypoint[0][$i];
            $noarrayTemporerKeypoint[1][$i]=$DrT_Keypoint[1][$i];
            $noarrayTemporerKeypoint[2][$i]=$DrT_Keypoint[2][$i];
            $noarrayTemporerKeypoint[3][$i]=$DrT_Keypoint[3][$i];
            $noarrayTemporerKeypoint[4][$i]=$DrT_Keypoint[4][$i];
            $noarrayTemporerKeypoint[5][$i]=$DrT_Keypoint[5][$i];
            $noarrayTemporerKeypoint[6][$i]=$DrT_Keypoint[6][$i];
            $noarrayTemporerKeypoint[7][$i]=$DrT_Keypoint[7][$i];
            $noarrayTemporerKeypoint[8][$i]=$DrT_Keypoint[8][$i];
            $noarrayTemporerKeypoint[9][$i]=$DrT_Keypoint[9][$i];
            $noarrayTemporerKeypoint[10][$i]=$DrT_Keypoint[10][$i];
            $noarrayTemporerKeypoint[11][$i]=$DrT_Keypoint[11][$i];
            $noarrayTemporerKeypoint[12][$i]=$DrT_Keypoint[12][$i];
            

            //SAIDI SAIFI
            $ULPbaratP = DB::table("detailevents")->where('ulp','ULP PEKANBARU KOTA BARAT')->whereMonth('tgl_padam',$i)->get();
            $ULPtimurP = DB::table("detailevents")->where('ulp','ULP PEKANBARU KOTA TIMUR')->whereMonth('tgl_padam',$i)->get();
            $ULPpanamP = DB::table("detailevents")->where('ulp','ULP PANAM')->whereMonth('tgl_padam',$i)->get();
            $ULPsimpangP = DB::table("detailevents")->where('ulp','ULP SIMPANG TIGA')->whereMonth('tgl_padam',$i)->get();
            $ULPrumbaiP = DB::table("detailevents")->where('ulp','ULP RUMBAI')->whereMonth('tgl_padam',$i)->get();
            $ULPkamparP = DB::table("detailevents")->where('ulp','ULP KAMPAR')->whereMonth('tgl_padam',$i)->get();
            $ULPbangkinangP = DB::table("detailevents")->where('ulp','ULP BANGKINANG')->whereMonth('tgl_padam',$i)->get();
            $ULPujungbatuP = DB::table("detailevents")->where('ulp','ULP UJUNG BATU')->whereMonth('tgl_padam',$i)->get();
            $ULPpasirP = DB::table("detailevents")->where('ulp','ULP PASIR PANGARAIAN')->whereMonth('tgl_padam',$i)->get();
            $ULPsiakP =  DB::table("detailevents")->where('ulp','ULP SIAK SRI INDRAPURA')->whereMonth('tgl_padam',$i)->get();
            $ULPperawangP = DB::table("detailevents")->where('ulp','ULP PERAWANG')->whereMonth('tgl_padam',$i)->get();
            $ULPpangkalankerinciP = DB::table("detailevents")->where('ulp','ULP PANGKALAN KERINCI')->whereMonth('tgl_padam',$i)->get();
            $ULPlipatkainP = DB::table("detailevents")->where('ulp','ULP LIPAT KAIN')->whereMonth('tgl_padam',$i)->get();

            $UP3Pekanbaru = DB::table("detailevents")->whereMonth('tgl_padam',$i)->get();

            $noarraySAIDI[0][$i]=$ULPlipatkainP;
            $noarraySAIDI[1][$i]=$ULPkamparP;
            $noarraySAIDI[2][$i]=$ULPsiakP;
            $noarraySAIDI[3][$i]=$ULPpangkalankerinciP;
            $noarraySAIDI[4][$i]=$ULPujungbatuP;
            $noarraySAIDI[5][$i]=$ULPbangkinangP;
            $noarraySAIDI[6][$i]=$ULPperawangP;
            $noarraySAIDI[7][$i]=$ULPrumbaiP;
            $noarraySAIDI[8][$i]=$ULPbaratP;
            $noarraySAIDI[9][$i]=$ULPsimpangP;
            $noarraySAIDI[10][$i]=$ULPtimurP;
            $noarraySAIDI[11][$i]=$ULPpasirP;
            $noarraySAIDI[12][$i]=$ULPpanamP;

            $noarrayUP3Pekanbaru[$i] = $UP3Pekanbaru;
          


            //Performa SAIDI
        

           //SAIDI 
        } 
        $arrayTotalSAIDI = array();
        $arrayTotalSAIFI = array();
        for ($i=1; $i < 13; $i++) { 
            $hasilhtg = 0;
            $itung = array();
            foreach ($noarrayUP3Pekanbaru[$i] as $key) {
                
                
                $itung[] = $key->SAIDI;
                
            }
            $hasilhtg = array_sum($itung);
            $arrayTotalSAIDI[$i] = $hasilhtg;
            $hasilhtg = 0;
            $itung = 0;
            $hasilhtg1 = 0;
            $itung1 = array();
            foreach ($noarrayUP3Pekanbaru[$i] as $key) {
                
                $itung1[] = $key->SAIFI;
            }
            $hasilhtg1 = array_sum($itung1);
            $arrayTotalSAIFI[$i] = $hasilhtg1;
            $hasilhtg1 = 0;
            $itung1 = 0;

        }
       
        

        $penambah = 0;
        $SAIDI = array();
        $SAIFI = array();
        $htg = 0;
        for ($i=0; $i < 13 ; $i++) { 
            for ($j=1; $j < 13; $j++) { 
                foreach ($noarraySAIDI[$i][$j] as $hitung) {
                    $htg = $hitung->saidi_ulp + $penambah;

                    $penambah = $htg;
                    
        
                }
                $SAIDI[$i][$j] = $penambah;
                 
                $penambah = 0;
        
                }
                
            }
            
        //SAIFI
        for ($i=0; $i < 13 ; $i++) { 
            for ($j=1; $j < 13; $j++) { 
                foreach ($noarraySAIDI[$i][$j] as $hitung) {
                    $htg = $hitung->saifi_ulp + $penambah;

                    $penambah = $htg;
                    
        
                }
                $SAIFI[$i][$j] = $penambah;
                $penambah = 0;
        
                }
                
            }

            $saidiPembagijanuari = array();
            $saidiPembagijanuari[0] = ($SAIDI[0][1] - 238)/238;
            $saidiPembagijanuari[1] = ($SAIDI[1][1] - 167)/167;
            $saidiPembagijanuari[2] = ($SAIDI[2][1] - 37)/37;
            $saidiPembagijanuari[3] = ($SAIDI[3][1] - 150)/150;
            $saidiPembagijanuari[4] = ($SAIDI[4][1] - 190)/190;
            $saidiPembagijanuari[5] = ($SAIDI[5][1] - 109)/109;
            $saidiPembagijanuari[6] = ($SAIDI[6][1] - 6)/6;
            $saidiPembagijanuari[7] = ($SAIDI[7][1] - 31)/31;
            $saidiPembagijanuari[8] = ($SAIDI[8][1] - 79)/79;
            $saidiPembagijanuari[9] = ($SAIDI[9][1] - 41)/41;
            $saidiPembagijanuari[10] = ($SAIDI[10][1] - 19)/19;
            $saidiPembagijanuari[11] = ($SAIDI[11][1] - 272)/272;
            $saidiPembagijanuari[12] = ($SAIDI[12][1] - 23)/23;

            $saifiPembagijanuari = array();
            $saifiPembagijanuari[0] = ($SAIFI[0][1] - 3.0183)/3.0183;
            $saifiPembagijanuari[1] = ($SAIFI[1][1] - 1.4947)/1.4947;
            $saifiPembagijanuari[2] = ($SAIFI[2][1] - 2.0427)/2.0427;
            $saifiPembagijanuari[3] = ($SAIFI[3][1] - 2.6514)/2.6514;
            $saifiPembagijanuari[4] = ($SAIFI[4][1] - 2.3641)/2.3641;
            $saifiPembagijanuari[5] = ($SAIFI[5][1] - 1.3672)/1.3672;
            $saifiPembagijanuari[6] = ($SAIFI[6][1] - 0.119)/0.119;
            $saifiPembagijanuari[7] = ($SAIFI[7][1] - 0.5357)/0.5357;
            $saifiPembagijanuari[8] = ($SAIFI[8][1] - 1.3913)/1.3913;
            $saifiPembagijanuari[9] = ($SAIFI[9][1] - 0.5133)/0.5133;
            $saifiPembagijanuari[10] = ($SAIFI[10][1] - 0.4616)/0.4616;
            $saifiPembagijanuari[11] = ($SAIFI[11][1] - 2.2079)/2.2079;
            $saifiPembagijanuari[12] = ($SAIFI[12][1] - 0.1708)/0.1708;

            
        
         // Jumlah Permanen dan permanen dan All
        $jumlahArray_Keypoint = array();
        $jumlahtotal_Keypoint=array();
        $jumlahtotalpermanen_Keypoint=array();
        $jumlahPArray_Keypoint = array();
        $jumlahP_Keypoint = array($noarrayPermanenKeypoint[0],$noarrayPermanenKeypoint[1],$noarrayPermanenKeypoint[2],$noarrayPermanenKeypoint[3],$noarrayPermanenKeypoint[4],$noarrayPermanenKeypoint[5],$noarrayPermanenKeypoint[6],$noarrayPermanenKeypoint[7],$noarrayPermanenKeypoint[8],$noarrayPermanenKeypoint[9],$noarrayPermanenKeypoint[10],$noarrayPermanenKeypoint[11],$noarrayPermanenKeypoint[12]);
        $jumlah_Keypoint = array($noarrayKeypoint[0],$noarrayKeypoint[1],$noarrayKeypoint[2],$noarrayKeypoint[3],$noarrayKeypoint[4],$noarrayKeypoint[5],$noarrayKeypoint[6],$noarrayKeypoint[7],$noarrayKeypoint[8],$noarrayKeypoint[9],$noarrayKeypoint[10],$noarrayKeypoint[11],$noarrayKeypoint[12]);

        $jumlahtotaltemporer_Keypoint=array();
        $jumlahTArray_Keypoint = array();
        $jumlahT_Keypoint = array($noarrayTemporerKeypoint[0],$noarrayTemporerKeypoint[1],$noarrayTemporerKeypoint[2],$noarrayTemporerKeypoint[3],$noarrayTemporerKeypoint[4],$noarrayTemporerKeypoint[5],$noarrayTemporerKeypoint[6],$noarrayTemporerKeypoint[7],$noarrayTemporerKeypoint[8],$noarrayTemporerKeypoint[9],$noarrayTemporerKeypoint[10],$noarrayTemporerKeypoint[11],$noarrayTemporerKeypoint[12]);

        for ($i=0; $i < 12; $i++){ 
            
            for ($j=0; $j < 13; $j++) { 
                $jumlahTArray_Keypoint[$i][$j] = $jumlahT_Keypoint[$j][$i+1]; 
                $jumlahPArray_Keypoint[$i][$j] = $jumlahP_Keypoint[$j][$i+1];
                $jumlahArray_Keypoint[$i][$j] = $jumlah_Keypoint[$j][$i+1];
            }
           
            $jumlahtotalpermanen_Keypoint[$i] = array_sum($jumlahPArray_Keypoint[$i]);
            $jumlahtotaltemporer_Keypoint[$i] = array_sum($jumlahTArray_Keypoint[$i]);
            $jumlahtotal_Keypoint[$i] = array_sum($jumlahArray_Keypoint[$i]);
        
        }
        $set = array();
        $setSAIFI = array();
        $setorSAI = 0;
        $setor = 0;
        for ($i=0; $i < 13; $i++) { 
            for ($j=1; $j < 12; $j++) { 
                $setor = ($SAIDI[$i][$j+1] - $SAIDI[$i][$j])/$SAIDI[$i][$j];
                $set[$i][$j] = $setor;

                $setorSAI = ($SAIFI[$i][$j+1] - $SAIFI[$i][$j])/$SAIFI[$i][$j];
                $setSAIFI[$i][$j] = $setorSAI;
                
            }
            
        }
        $rerataSAIDI = array();
        $rerataSAIFI = array();
        $rerataSAIDI2 = array();
        $rerataSAIFI2 = array();
        for ($i=0; $i < 13; $i++) { 
            $rerataSAIDI[$i] = round(($saidiPembagijanuari[$i]+array_sum($set[$i]))/12,2);   
            $rerataSAIFI[$i] = round(($saifiPembagijanuari[$i]+array_sum($setSAIFI[$i]))/12,2);    
            $rerataSAIDI2[$i] = ($saidiPembagijanuari[$i]+array_sum($set[$i]))/12;  
            $rerataSAIFI2[$i] = ($saifiPembagijanuari[$i]+array_sum($setSAIFI[$i]))/12;
        }

  
        //menghitung performa PLN
        $perform_Keypoint = array();
        $keypoint = 0;
        $keypointtotal = 0;
        $keypoinPtotal = 0;
        $keypoinTtotal = 0;
        $performaK = 0;
        $performaKP = 0;
        $performaKT = 0;
        $performaKtotal = 0;
        $performtotal_Keypoint = array();
        $noarrayKeypointTotal = array($noarrayKeypoint[0],$noarrayKeypoint[1],$noarrayKeypoint[2],$noarrayKeypoint[3],$noarrayKeypoint[4],$noarrayKeypoint[5],$noarrayKeypoint[6],$noarrayKeypoint[7],$noarrayKeypoint[8],$noarrayKeypoint[9],$noarrayKeypoint[10],$noarrayKeypoint[11],$noarrayKeypoint[12]);
        $noarrayKeypointTotal_temporal = array($noarrayTemporerKeypoint[0],$noarrayTemporerKeypoint[1],$noarrayTemporerKeypoint[2],$noarrayTemporerKeypoint[3],$noarrayTemporerKeypoint[4],$noarrayTemporerKeypoint[5],$noarrayTemporerKeypoint[6],$noarrayTemporerKeypoint[7],$noarrayTemporerKeypoint[8],$noarrayTemporerKeypoint[9],$noarrayTemporerKeypoint[10],$noarrayTemporerKeypoint[11],$noarrayTemporerKeypoint[12]);
        $noarrayKeypointTotal_permanen = array($noarrayPermanenKeypoint[0],$noarrayPermanenKeypoint[1],$noarrayPermanenKeypoint[2],$noarrayPermanenKeypoint[3],$noarrayPermanenKeypoint[4],$noarrayPermanenKeypoint[5],$noarrayPermanenKeypoint[6],$noarrayPermanenKeypoint[7],$noarrayPermanenKeypoint[8],$noarrayPermanenKeypoint[9],$noarrayPermanenKeypoint[10],$noarrayPermanenKeypoint[11],$noarrayPermanenKeypoint[12]);
        $performtotalP_Keypoint = array();
        $performtotalT_Keypoint = array();

        $performaTTotal_Keypoint = 0;
        $KTtotal = 0;
        $performTtotal_Keypoint = array();

        $performaPermanenTotal_Keypoint = 0;
        $KPtotal = 0;
        $performPermanentotal_Keypoint = array();

        for ($i=1; $i <= 13;  $i++) { 
            
            

            for ($j=0; $j < 12; $j++) { 
                $performaK = $noarrayKeypointTotal[$i-1][$j+1]-$keypoint;
                $perform_Keypoint[$i-1][$j] = $performaK;  
                $keypoint = $noarrayKeypointTotal[$i-1][$j+1];
                
                $performaKP = $noarrayKeypointTotal_permanen[$i-1][$j+1]-$keypoinPtotal;
                $performtotalP_Keypoint[$i-1][$j] = $performaKP;  
                $keypoinPtotal = $noarrayKeypointTotal_permanen[$i-1][$j+1];

                $performaKT = $noarrayKeypointTotal_temporal[$i-1][$j+1]-$keypoinTtotal;
                $performtotalT_Keypoint[$i-1][$j] = $performaKT;  
                $keypoinTtotal = $noarrayKeypointTotal_temporal[$i-1][$j+1];

                $performaKtotal = $jumlahtotal_Keypoint[$j]-$keypointtotal;
                $performtotal_Keypoint[$j] = $performaKtotal;
                $keypointtotal = $jumlahtotal_Keypoint[$j];

                $performaTTotal_Keypoint = $jumlahtotaltemporer_Keypoint[$j]-$KTtotal;
                $performTtotal_Keypoint[$j] = $performaTTotal_Keypoint;
                $KTtotal = $jumlahtotaltemporer_Keypoint[$j];

                $performaPermanenTotal_Keypoint = $jumlahtotalpermanen_Keypoint[$j]-$KPtotal;
                $performPermanentotal_Keypoint[$j] = $performaPermanenTotal_Keypoint;
                $KPtotal = $jumlahtotalpermanen_Keypoint[$j];
            }
        } 


//total SAIDI
                $totalUP3SAIDI = array();
                $t1 = 0;
                for ($i=0; $i < 11 ; $i++) { 
                    $totalUP3SAIDI[0][$i] = ($jumlahtotal[$i+1] - $jumlahtotal[$i])/$jumlahtotal[$i]; 
                    $totalUP3SAIDI[2][$i] = ($jumlahtotalpermanen[$i+1] - $jumlahtotalpermanen[$i])/$jumlahtotalpermanen[$i];
                    $totalUP3SAIDI[1][$i] = ($jumlahtotaltemporer[$i+1] - $jumlahtotaltemporer[$i])/$jumlahtotaltemporer[$i];
                    $totalUP3SAIDI[3][$i] = ($jumlahtotal_PMT[$i+1] - $jumlahtotal_PMT[$i])/$jumlahtotal_PMT[$i];
                    $totalUP3SAIDI[4][$i] = ($jumlahtotaltemporer_PMT[$i+1] - $jumlahtotaltemporer_PMT[$i])/$jumlahtotaltemporer_PMT[$i];
                    $totalUP3SAIDI[5][$i] = ($jumlahtotalpermanen_PMT[$i+1] - $jumlahtotalpermanen_PMT[$i])/$jumlahtotalpermanen_PMT[$i];
                    $totalUP3SAIDI[6][$i] = ($jumlahtotal_Keypoint[$i+1] - $jumlahtotal_Keypoint[$i])/$jumlahtotal_Keypoint[$i];
                    $totalUP3SAIDI[7][$i] = ($jumlahtotaltemporer_Keypoint[$i+1] - $jumlahtotaltemporer_Keypoint[$i])/$jumlahtotaltemporer_Keypoint[$i];
                    $totalUP3SAIDI[8][$i] = ($jumlahtotalpermanen_Keypoint[$i+1] - $jumlahtotalpermanen_Keypoint[$i])/$jumlahtotalpermanen_Keypoint[$i];
                    
}
$totalUP3 = array();
for ($i=0; $i < 9; $i++) { 
    $totalUP3[$i] = round(array_sum($totalUP3SAIDI[$i])/12,2);
}

        //MONITORING RAPORT KINERJA KEHANDALAN ULP KOMULATIF
        $kehandalanAll = array();
        $kehandalanPermanen = array();
        $kehandalanTemporer = array();
        $kehandalanAll_PMT = array();
        $kehandalanPermanen_PMT = array();
        $kehandalanTemporer_PMT = array();
        $kehandalanAll_Keypoint = array();
        $kehandalanPermanen_Keypoint = array();
        $kehandalanTemporer_Keypoint = array();
        $reratakehandalanAll = array();
        $reratakehandalanPermanen = array();
        $reratakehandalanTemporer = array();
        $reratakehandalanAll_Keypoint = array();
        $reratakehandalanPermanen_Keypoint = array();
        $reratakehandalanTemporer_Keypoint = array();
        $reratakehandalanAll_PMT = array();
        $reratakehandalanPermanen_PMT = array();
        $reratakehandalanTemporer_PMT = array();

        $rata2All = array();
        $rata2Permanen = array();
        $rata2Temporer = array();

        $rata2All_PMT = array();
        $rata2Permanen_PMT = array();
        $rata2Temporer_PMT = array();

        $rata2All_Keypoint = array();
        $rata2Permanen_Keypoint = array();
        $rata2Temporer_Keypoint = array();

        for ($i=0; $i < 13; $i++) {
            for ($j=0; $j < 11 ; $j++) { 
                //All Segmen
                if($jumlah[$i][$j+1] != 0 && $jumlahP[$i][$j+1] != 0 && $jumlahT[$i][$j+1] != 0){
                    
                    $kehandalanAll[$i][$j] = ((float)$jumlah[$i][$j+2] - (float)$jumlah[$i][$j+1])/(float)$jumlah[$i][$j+1];
                    $kehandalanPermanen[$i][$j] = ((float)$jumlahP[$i][$j+2] - (float)$jumlahP[$i][$j+1])/(float)$jumlahP[$i][$j+1];
                    $kehandalanTemporer[$i][$j] = ((float)$jumlahT[$i][$j+2] - (float)$jumlahT[$i][$j+1])/(float)$jumlahT[$i][$j+1];
                }else{
                    $kehandalanAll[$i][$j] = 1;
                    $kehandalanPermanen[$i][$j] = 1;
                    $kehandalanTemporer[$i][$j] = 1;
                }
                //Segmen PMT
                if($noarrayPMTTotal[$i][$j+1] != 0 && $jumlahP_PMT[$i][$j+1] && $jumlahT_PMT[$i][$j+1] != 0 ){
                    
                    $kehandalanAll_PMT[$i][$j] = ((float)$noarrayPMTTotal[$i][$j+2] - (float)$noarrayPMTTotal[$i][$j+1])/(float)$noarrayPMTTotal[$i][$j+1];
                    $kehandalanPermanen_PMT[$i][$j] = ((float)$jumlahP_PMT[$i][$j+2] - (float)$jumlahP_PMT[$i][$j+1])/(float)$jumlahP_PMT[$i][$j+1];
                    $kehandalanTemporer_PMT[$i][$j] = ((float)$jumlahT_PMT[$i][$j+2] - (float)$jumlahT_PMT[$i][$j+1])/(float)$jumlahT_PMT[$i][$j+1];
                }else{
                
                    $kehandalanAll_PMT[$i][$j] = 1;
                    $kehandalanPermanen_PMT[$i][$j] = 1;
                    $kehandalanTemporer_PMT[$i][$j] = 1;
                }
                //Segmen Keypoint
                if($noarrayKeypointTotal[$i][$j+1] != 0 && $noarrayKeypointTotal_temporal[$i][$j+1] != 0 && $noarrayKeypointTotal_permanen[$i][$j+1] != 0){

                    
                    $kehandalanAll_Keypoint[$i][$j] = ((float)$noarrayKeypointTotal[$i][$j+2] - (float)$noarrayKeypointTotal[$i][$j+1])/(float)$noarrayKeypointTotal[$i][$j+1];
                    $kehandalanPermanen_Keypoint[$i][$j] = ((float)$noarrayKeypointTotal_temporal[$i][$j+2] - (float)$noarrayKeypointTotal_temporal[$i][$j+1])/(float)$noarrayKeypointTotal_temporal[$i][$j+1];
                    $kehandalanTemporer_Keypoint[$i][$j] = ((float)$noarrayKeypointTotal_permanen[$i][$j+2] - (float)$noarrayKeypointTotal_permanen[$i][$j+1])/(float)$noarrayKeypointTotal_permanen[$i][$j+1];

                }else{
                    $kehandalanAll_Keypoint[$i][$j] = 1;
                    $kehandalanPermanen_Keypoint[$i][$j] = 1;
                    $kehandalanTemporer_Keypoint[$i][$j] = 1;
                }
            } 
            
            //All Segmen
            $rata2All[$i] = array_sum($kehandalanAll[$i])/12;
            $rata2Permanen[$i] = array_sum($kehandalanPermanen[$i])/12;
            $rata2Temporer[$i] = array_sum($kehandalanTemporer[$i])/12;
            $reratakehandalanAll[$i] = round($rata2All[$i],2) * 100;
            $reratakehandalanPermanen[$i] = round($rata2Permanen[$i],2) * 100;
            $reratakehandalanTemporer[$i] = round($rata2Temporer[$i],2) * 100;

            //Segmen PMT
            $rata2All_PMT[$i] = array_sum($kehandalanAll_PMT[$i])/12;
            $rata2Permanen_PMT[$i] = array_sum($kehandalanPermanen_PMT[$i])/12;
            $rata2Temporer_PMT[$i] = array_sum($kehandalanTemporer_PMT[$i])/12;
            $reratakehandalanAll_PMT[$i] = round($rata2All_PMT[$i],2) * 100;
            $reratakehandalanPermanen_PMT[$i] = round($rata2Permanen_PMT[$i],2) * 100;
            $reratakehandalanTemporer_PMT[$i] = round($rata2Temporer_PMT[$i],2) * 100;

            //Segmen Keypoint
            $rata2All_Keypoint[$i] = array_sum($kehandalanAll_Keypoint[$i])/12;
            $rata2Permanen_Keypoint[$i] = array_sum($kehandalanPermanen_Keypoint[$i])/12;
            $rata2Temporer_Keypoint[$i] = array_sum($kehandalanTemporer_Keypoint[$i])/12;
            $reratakehandalanAll_Keypoint[$i] = round($rata2All_Keypoint[$i],2) * 100;
            $reratakehandalanPermanen_Keypoint[$i] = round($rata2Permanen_Keypoint[$i],2) * 100;
            $reratakehandalanTemporer_Keypoint[$i] = round($rata2Temporer_Keypoint[$i],2) * 100;

        
       
        }
        // dd($kehandalanAll_PMT);
            $kehandalanAll1 = array($kehandalanAll[12],$kehandalanAll[5],$kehandalanAll[9],$kehandalanAll[11],$kehandalanAll[7],$kehandalanAll[6],$kehandalanAll[10],$kehandalanAll[4],$kehandalanAll[0],$kehandalanAll[3],$kehandalanAll[1],$kehandalanAll[8],$kehandalanAll[2]);
            $kehandalanTemporer1 = array($kehandalanTemporer[12],$kehandalanTemporer[5],$kehandalanTemporer[9],$kehandalanTemporer[11],$kehandalanTemporer[7],$kehandalanTemporer[6],$kehandalanTemporer[10],$kehandalanTemporer[4],$kehandalanTemporer[0],$kehandalanTemporer[3],$kehandalanTemporer[1],$kehandalanTemporer[8],$kehandalanTemporer[2]);
            $kehandalanPermanen1 = array($kehandalanPermanen[12],$kehandalanPermanen[5],$kehandalanPermanen[9],$kehandalanPermanen[11],$kehandalanPermanen[7],$kehandalanPermanen[6],$kehandalanPermanen[10],$kehandalanPermanen[4],$kehandalanPermanen[0],$kehandalanPermanen[3],$kehandalanPermanen[1],$kehandalanPermanen[8],$kehandalanPermanen[2]);
            $kehandalanAll_PMT1 = array($kehandalanAll_PMT[12],$kehandalanAll_PMT[5],$kehandalanAll_PMT[9],$kehandalanAll_PMT[11],$kehandalanAll_PMT[7],$kehandalanAll_PMT[6],$kehandalanAll_PMT[10],$kehandalanAll_PMT[4],$kehandalanAll_PMT[0],$kehandalanAll_PMT[3],$kehandalanAll_PMT[1],$kehandalanAll_PMT[8],$kehandalanAll_PMT[2]);
            $kehandalanTemporer_PMT1 = array($kehandalanTemporer_PMT[12],$kehandalanTemporer_PMT[5],$kehandalanTemporer_PMT[9],$kehandalanTemporer_PMT[11],$kehandalanTemporer_PMT[7],$kehandalanTemporer_PMT[6],$kehandalanTemporer_PMT[10],$kehandalanTemporer_PMT[4],$kehandalanTemporer_PMT[0],$kehandalanTemporer_PMT[3],$kehandalanTemporer_PMT[1],$kehandalanTemporer_PMT[8],$kehandalanTemporer_PMT[2]);
            $kehandalanPermanen_PMT1 = array($kehandalanPermanen_PMT[12],$kehandalanPermanen_PMT[5],$kehandalanPermanen_PMT[9],$kehandalanPermanen_PMT[11],$kehandalanPermanen_PMT[7],$kehandalanPermanen_PMT[6],$kehandalanPermanen_PMT[10],$kehandalanPermanen_PMT[4],$kehandalanPermanen_PMT[0],$kehandalanPermanen_PMT[3],$kehandalanPermanen_PMT[1],$kehandalanPermanen_PMT[8],$kehandalanPermanen_PMT[2]);
            $kehandalanAll_Keypoint1 = array($kehandalanAll_Keypoint[12],$kehandalanAll_Keypoint[5],$kehandalanAll_Keypoint[9],$kehandalanAll_Keypoint[11],$kehandalanAll_Keypoint[7],$kehandalanAll_Keypoint[6],$kehandalanAll_Keypoint[10],$kehandalanAll_Keypoint[4],$kehandalanAll_Keypoint[0],$kehandalanAll_Keypoint[3],$kehandalanAll_Keypoint[1],$kehandalanAll_Keypoint[8],$kehandalanAll_Keypoint[2]);
            $kehandalanTemporer_Keypoint1 = array($kehandalanTemporer_Keypoint[12],$kehandalanTemporer_Keypoint[5],$kehandalanTemporer_Keypoint[9],$kehandalanTemporer_Keypoint[11],$kehandalanTemporer_Keypoint[7],$kehandalanTemporer_Keypoint[6],$kehandalanTemporer_Keypoint[10],$kehandalanTemporer_Keypoint[4],$kehandalanTemporer_Keypoint[0],$kehandalanTemporer_Keypoint[3],$kehandalanTemporer_Keypoint[1],$kehandalanTemporer_Keypoint[8],$kehandalanTemporer_Keypoint[2]);
            $kehandalanPermanen_Keypoint1 = array($kehandalanPermanen_Keypoint[12],$kehandalanPermanen_Keypoint[5],$kehandalanPermanen_Keypoint[9],$kehandalanPermanen_Keypoint[11],$kehandalanPermanen_Keypoint[7],$kehandalanPermanen_Keypoint[6],$kehandalanPermanen_Keypoint[10],$kehandalanPermanen_Keypoint[4],$kehandalanPermanen_Keypoint[0],$kehandalanPermanen_Keypoint[3],$kehandalanPermanen_Keypoint[1],$kehandalanPermanen_Keypoint[8],$kehandalanPermanen_Keypoint[2]);
           
        
        $reratakehandalanAll1 = array($reratakehandalanAll[12],$reratakehandalanAll[5],$reratakehandalanAll[9],$reratakehandalanAll[11],$reratakehandalanAll[7],$reratakehandalanAll[6],$reratakehandalanAll[10],$reratakehandalanAll[4],$reratakehandalanAll[0],$reratakehandalanAll[3],$reratakehandalanAll[1],$reratakehandalanAll[8],$reratakehandalanAll[2]);
        $reratakehandalanTemporer1 = array($reratakehandalanTemporer[12],$reratakehandalanTemporer[5],$reratakehandalanTemporer[9],$reratakehandalanTemporer[11],$reratakehandalanTemporer[7],$reratakehandalanTemporer[6],$reratakehandalanTemporer[10],$reratakehandalanTemporer[4],$reratakehandalanTemporer[0],$reratakehandalanTemporer[3],$reratakehandalanTemporer[1],$reratakehandalanTemporer[8],$reratakehandalanTemporer[2]);
        $reratakehandalanPermanen1 = array($reratakehandalanPermanen[12],$reratakehandalanPermanen[5],$reratakehandalanPermanen[9],$reratakehandalanPermanen[11],$reratakehandalanPermanen[7],$reratakehandalanPermanen[6],$reratakehandalanPermanen[10],$reratakehandalanPermanen[4],$reratakehandalanPermanen[0],$reratakehandalanPermanen[3],$reratakehandalanPermanen[1],$reratakehandalanPermanen[8],$reratakehandalanPermanen[2]);
        $reratakehandalanAll_PMT1 = array($reratakehandalanAll_PMT[12],$reratakehandalanAll_PMT[5],$reratakehandalanAll_PMT[9],$reratakehandalanAll_PMT[11],$reratakehandalanAll_PMT[7],$reratakehandalanAll_PMT[6],$reratakehandalanAll_PMT[10],$reratakehandalanAll_PMT[4],$reratakehandalanAll_PMT[0],$reratakehandalanAll_PMT[3],$reratakehandalanAll_PMT[1],$reratakehandalanAll_PMT[8],$reratakehandalanAll_PMT[2]);
        $reratakehandalanTemporer_PMT1 = array($reratakehandalanTemporer_PMT[12],$reratakehandalanTemporer_PMT[5],$reratakehandalanTemporer_PMT[9],$reratakehandalanTemporer_PMT[11],$reratakehandalanTemporer_PMT[7],$reratakehandalanTemporer_PMT[6],$reratakehandalanTemporer_PMT[10],$reratakehandalanTemporer_PMT[4],$reratakehandalanTemporer_PMT[0],$reratakehandalanTemporer_PMT[3],$reratakehandalanTemporer_PMT[1],$reratakehandalanTemporer_PMT[8],$reratakehandalanTemporer_PMT[2]);
        $reratakehandalanPermanen_PMT1 = array($reratakehandalanPermanen_PMT[12],$reratakehandalanPermanen_PMT[5],$reratakehandalanPermanen_PMT[9],$reratakehandalanPermanen_PMT[11],$reratakehandalanPermanen_PMT[7],$reratakehandalanPermanen_PMT[6],$reratakehandalanPermanen_PMT[10],$reratakehandalanPermanen_PMT[4],$reratakehandalanPermanen_PMT[0],$reratakehandalanPermanen_PMT[3],$reratakehandalanPermanen_PMT[1],$reratakehandalanPermanen_PMT[8],$reratakehandalanPermanen_PMT[2]);
        $reratakehandalanAll_Keypoint1 = array($reratakehandalanAll_Keypoint[12],$reratakehandalanAll_Keypoint[5],$reratakehandalanAll_Keypoint[9],$reratakehandalanAll_Keypoint[11],$reratakehandalanAll_Keypoint[7],$reratakehandalanAll_Keypoint[6],$reratakehandalanAll_Keypoint[10],$reratakehandalanAll_Keypoint[4],$reratakehandalanAll_Keypoint[0],$reratakehandalanAll_Keypoint[3],$reratakehandalanAll_Keypoint[1],$reratakehandalanAll_Keypoint[8],$reratakehandalanAll_Keypoint[2]);
        $reratakehandalanTemporer_Keypoint1 = array($reratakehandalanTemporer_Keypoint[12],$reratakehandalanTemporer_Keypoint[5],$reratakehandalanTemporer_Keypoint[9],$reratakehandalanTemporer_Keypoint[11],$reratakehandalanTemporer_Keypoint[7],$reratakehandalanTemporer_Keypoint[6],$reratakehandalanTemporer_Keypoint[10],$reratakehandalanTemporer_Keypoint[4],$reratakehandalanTemporer_Keypoint[0],$reratakehandalanTemporer_Keypoint[3],$reratakehandalanTemporer_Keypoint[1],$reratakehandalanTemporer_Keypoint[8],$reratakehandalanTemporer_Keypoint[2]);
        $reratakehandalanPermanen_Keypoint1 = array($reratakehandalanPermanen_Keypoint[12],$reratakehandalanPermanen_Keypoint[5],$reratakehandalanPermanen_Keypoint[9],$reratakehandalanPermanen_Keypoint[11],$reratakehandalanPermanen_Keypoint[7],$reratakehandalanPermanen_Keypoint[6],$reratakehandalanPermanen_Keypoint[10],$reratakehandalanPermanen_Keypoint[4],$reratakehandalanPermanen_Keypoint[0],$reratakehandalanPermanen_Keypoint[3],$reratakehandalanPermanen_Keypoint[1],$reratakehandalanPermanen_Keypoint[8],$reratakehandalanPermanen_Keypoint[2]);

        //RANK All Segmen
        $rankAll = array();
        $rankTemporer = array();
        $rankPermanen = array();
        
        $rankKom = array();
        for ($i=0; $i < 13; $i++) {
             $rankAll[$i] =  rank_avg($rata2All[$i], $rata2All, 1);
             $rankPermanen[$i] = rank_avg($rata2Permanen[$i], $rata2Permanen, 1);
             $rankTemporer[$i] = rank_avg($rata2Temporer[$i], $rata2Temporer, 1);

             $rankKom[$i] = ($reratakehandalanAll1[$i] + $reratakehandalanTemporer1[$i] + $reratakehandalanPermanen1[$i] + $reratakehandalanAll_PMT1[$i] + $reratakehandalanTemporer_PMT1[$i] + $reratakehandalanPermanen_PMT1[$i] + $reratakehandalanAll_Keypoint1[$i] + $reratakehandalanTemporer_Keypoint1[$i] + $reratakehandalanPermanen_Keypoint1[$i] + ($rerataSAIDI[$i]*100) + ($rerataSAIFI[$i]*100))/11;

            }
           
       
         
        $Rank_komulatif =  array();
        //RANK PMT
        $rankAll_PMT = array();
        $rankTemporer_PMT = array();
        $rankPermanen_PMT = array();
        for ($i=0; $i < 13; $i++) {
            $uniq = array_unique($rankKom);
             $rankAll_PMT[$i] =  rank_avg($rata2All[$i], $rata2All, 1);
             $rankPermanen_PMT[$i] = rank_avg($rata2Permanen_PMT[$i], $rata2Permanen_PMT, 1);
             $rankTemporer_PMT[$i] = rank_avg($rata2Temporer_PMT[$i], $rata2Temporer_PMT, 1);
             
             //Rank komulatif
             $Rank_komulatif[$i] = rank_avg($rankKom[$i], $uniq, 1);
             
            
        }
        
        //RANK Keypoint
        $rankSAIDI1 = array();
        $rankSAIFI1 = array();
        $buat = array();
        $rankAll_Keypoint = array();
        $rankDes = array();
        $feb_nov = array();
        $rankTemporer_Keypoint = array();
        $rankPermanen_Keypoint = array();
        for ($i=0; $i < 13; $i++) {
             $rankAll_Keypoint[$i] =  rank_avg($rata2All_Keypoint[$i], $rata2All_Keypoint, 1);
             $rankPermanen_Keypoint[$i] = rank_avg($rata2Permanen_Keypoint[$i], $rata2Permanen_Keypoint, 1);
             $rankTemporer_Keypoint[$i] = rank_avg($rata2Temporer_Keypoint[$i], $rata2Temporer_Keypoint, 1);
             
             for ($j=0; $j < 13 ; $j++) { 
                
                
                    $buat[$j] = round((round($kehandalanAll1[$j][10] *100,2)+round($kehandalanTemporer1[$j][10]*100,2)+round($kehandalanPermanen1[$j][10]*100,2)+round($kehandalanAll_PMT1[$j][10]*100,2)+round($kehandalanTemporer_PMT1[$j][10]*100,2)+round($kehandalanPermanen_PMT1[$j][10]*100,2)+round($kehandalanAll_Keypoint1[$j][10]*100,2)+round($kehandalanTemporer_Keypoint1[$j][10]*100,2)+round($kehandalanPermanen_Keypoint1[$j][10]*100,2)+round($set[$j][11]*100,2)+round($setSAIFI[$j][11]*100,2))/12); 
                                    } 
             $bt = array_unique($buat);

               

             if($bt != 13){   

                $rankDes[$i] = rank_avg($buat[$i], $bt, 1);

             }else{
                $rankDes[$i] = rank_avg($bt[$i], $bt, 1);
             }

           
        }
        
        for ($i=0; $i < 10 ; $i++) { 
            for ($j=0; $j < 13; $j++) { 
                $feb_nov[$i][$j] = (round($kehandalanAll1[$j][$i+1] *100,2)+round($kehandalanTemporer1[$j][$i+1]*100,2)+round($kehandalanPermanen1[$j][$i+1]*100,2)+round($kehandalanAll_PMT1[$j][$i+1]*100,2)+round($kehandalanTemporer_PMT1[$j][$i+1]*100,2)+round($kehandalanPermanen_PMT1[$j][$i+1]*100,2)+round($kehandalanAll_Keypoint1[$j][$i+1]*100,2)+round($kehandalanTemporer_Keypoint1[$j][$i+1]*100,2)+round($kehandalanPermanen_Keypoint1[$j][$i+1]*100,2)+round($set[$j][$i+1]*100,2)+round($setSAIFI[$j][$i+1]*100,2))/12; 
            }
            
        }
        $rankBul = array();
        for ($i=0; $i < 10 ; $i++) { 
            for ($j=0; $j < 13; $j++) { 
                $rankBul[$j][$i]  = rank_avg($feb_nov[$i][$j], $feb_nov[$i]);
            }
        }
         
        
        for ($i=0; $i < 13; $i++) { 
            $rankSAIDI1[$i] = rank_avg($rerataSAIDI2[$i],$rerataSAIDI2,1);
            $rankSAIFI1[$i] = rank_avg($rerataSAIFI2[$i],$rerataSAIFI2,1);
        }
        
        
        return view('kehandalan', compact('noarray1','noarray2','noarray3','noarray4','noarray5','rankSAIDI1',
        'noarray6','noarray7','noarray8','noarray9','noarray10','noarray11','noarray12','noarray13','arrayTotalSAIFI',
        'noarray1PMT','noarray2PMT','noarray3PMT','noarray4PMT','noarray5PMT','performtotalP_PMT','performTtotal_PMT','performPermanentotal_PMT',
        'noarray6PMT','noarray7PMT','noarray8PMT','noarray9PMT','noarray10PMT','noarray11PMT','noarray12PMT','noarray13PMT'
        ,'performarray1','performarray2','performarray3','performarray4','performarray5','performarray6',
        'performarray7','performarray8','performarray9','performarray10','performarray11','performarray12','penyulangAr'
        ,'performarray13','performarraytotal','performarraytotalpermanen','performarraytotaltemporer','performtotalT_PMT'
        ,'performarray1P','performarray2P','performarray3P','performarray4P','performarray5P','performarray6P',
        'performarray7P','performarray8P','performarray9P','performarray10P','performarray11P','performarray12P','arrayTotalSAIDI'
        ,'performarray13P','performarray1T','performarray2T','performarray3T','performarray4T','performarray5T','performarray6T',
        'performarray7T','performarray8T','performarray9T','performarray10T','performarray11T','performarray12T'
        ,'performarray13T','noarray1P_PMT','noarray2P_PMT','noarray3P_PMT','noarray4P_PMT','noarray5P_PMT','noarray6P_PMT','noarray7P_PMT','noarray8P_PMT','noarray9P_PMT'
        ,'noarray10P_PMT','noarray11P_PMT','noarray12P_PMT','noarray13P_PMT','perform_PMT','performtotal_PMT','rankSAIFI1'
        ,'noarray1P','noarray2P','noarray3P','noarray4P','noarray5P','noarray6P','noarray7P','noarray8P','noarray9P','totalUP3'
        ,'noarray10P','noarray11P','noarray12P','noarray13P', 'jumlahtotal','jumlahtotalpermanen','jumlahtotaltemporer'
        ,'noarray1T','noarray2T','noarray3T','noarray4T','noarray5T','noarray6T','noarray7T','noarray8T','noarray9T','rankBul'
        ,'noarray10T','noarray11T','noarray12T','noarray13T','noarray1T_PMT','noarray2T_PMT','noarray3T_PMT','noarray4T_PMT','noarray5T_PMT','noarray6T_PMT','noarray7T_PMT','noarray8T_PMT','noarray9T_PMT'
        ,'noarray10T_PMT','noarray11T_PMT','noarray12T_PMT','noarray13T_PMT', 'jumlahtotal_PMT','jumlahtotalpermanen_PMT','jumlahtotaltemporer_PMT',
        'noarrayKeypoint','noarrayPermanenKeypoint', 'noarrayTemporerKeypoint','jumlahArray_Keypoint','jumlahTArray_Keypoint','jumlahPArray_Keypoint', 
        'jumlahtotalpermanen_Keypoint','jumlahtotaltemporer_Keypoint','jumlahtotal_Keypoint','performtotal_Keypoint','performtotalP_Keypoint'
        ,'performTtotal_Keypoint','performPermanentotal_Keypoint','perform_Keypoint','performtotalP_Keypoint','performtotalT_Keypoint'
        ,'reratakehandalanAll','reratakehandalanPermanen','reratakehandalanTemporer','reratakehandalanAll_PMT','reratakehandalanPermanen_PMT','reratakehandalanTemporer_PMT'
        ,'reratakehandalanAll_Keypoint','reratakehandalanPermanen_Keypoint','reratakehandalanTemporer_Keypoint','rankAll','rankPermanen_Keypoint'
        ,'rankTemporer','rankPermanen','rankAll_PMT','rankTemporer_PMT','rankPermanen_PMT','rankAll_Keypoint','rankTemporer_Keypoint','rankDes'
        ,'kehandalanAll','kehandalanTemporer','kehandalanPermanen','kehandalanAll_PMT','kehandalanTemporer_PMT','kehandalanPermanen_PMT','setSAIFI','buat'
        ,'kehandalanAll_Keypoint','kehandalanTemporer_Keypoint','kehandalanPermanen_Keypoint','SAIDI','SAIFI','rerataSAIDI','rerataSAIFI','Rank_komulatif','set','totalUP3SAIDI'));
    

        
    }
   
    
}

function rank_avg($value, $array, $order = 0) {
    // menyortir 
      if ($order) sort ($array); else rsort($array);
    // menambahkan item
      array_unshift($array, $value+1); 
    // memilih seluruh index
      $keys = array_keys($array, $value);
      if (count($keys) == 0) return NULL;
    // menghitung rank
      return array_sum($keys) / count($keys);
    }
    
    