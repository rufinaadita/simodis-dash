@extends('navbar.dash')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori All Segmen Semua Gangguan </h1></center><br>
    <section class="section">
        <div class="row" id="table-responsive">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <!-- table responsive -->
                    <div class="table-responsive">
                        <table
                            class="table mb-0 table-hover table-dark table-wrapper-scroll-y "
                            style="font-size: .55rem; border-collapse: separate; color: black; font-size: 12px">
                            <tr>
            <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD; width: 10px">No</th>
            <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >UP3</th>
            <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >1</th>
            <th rowspan="2" style="text-align: center; vertical-align: middle;background-color: #B4C6E7 "  >2</th>
            <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >3</th>
            <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >4</th>
            <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >5</th>
            <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >6</th>
            <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >7</th>
            <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >8</th>
            <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >9</th>
            <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >10</th>
            <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >11</th>
            <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >12</th>
            <th colspan="12" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">POTRET KINERJA PENYULANG MoM</th>
          </tr>   
          <tr>
            <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Januari</th>
            <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  >Februari</th>
            <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Maret</th>
            <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >April</th>
            <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >Mei</th>
            <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >Juni</th>
            <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >juli</th>
            <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Agustus</th>
            <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >September</th>
            <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Oktober</th>
            <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >November</th>
            <th  style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Desember</th>
          </tr>
          <tr>
            <td style="text-align: center; background-color: #F8CBAD">1</td>
            <td style="text-align: center; background-color: #F8CBAD">Kota Barat</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray1[$i] }}</td>
        @endfor
        <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
        @for ($i = 2; $i < 13;  $i++)
            @if ($performarray1[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray1[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">2</td>
            <td style="text-align: center; background-color: #F8CBAD">Kota Timur</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray2[$i] }}</td>
        @endfor  
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray2[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray2[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">3</td>
            <td style="text-align: center; background-color: #F8CBAD">Panam</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray3[$i] }}</td>
        @endfor  
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray3[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray3[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">4</td>
            <td style="text-align: center; background-color: #F8CBAD">Simpang Tiga</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray4[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray4[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray4[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor 
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">5</td>
            <td style="text-align: center; background-color: #F8CBAD">Rumbai</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray5[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray5[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray5[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor 
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">6</td>
            <td style="text-align: center; background-color: #F8CBAD">Kampar</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray6[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray6[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray6[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor 
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">7</td>
            <td style="text-align: center; background-color: #F8CBAD">Bangkinang</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray7[$i] }}</td>
        @endfor  
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray7[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray7[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">8</td>
            <td style="text-align: center; background-color: #F8CBAD">Ujung Batu</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray8[$i] }}</td>
        @endfor
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray8[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray8[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor  
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">9</td>
            <td style="text-align: center; background-color: #F8CBAD">Pasir Pangaraian</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray9[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray9[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray9[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">10</td>
            <td style="text-align: center; background-color: #F8CBAD">Siak Sri Indrapura</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray10[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray10[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray10[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor 
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">11</td>
            <td style="text-align: center; background-color: #F8CBAD">Perawang</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray11[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray11[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray11[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">12</td>
            <td style="text-align: center; background-color: #F8CBAD">Pangkalan Kerinci</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray12[$i] }}</td>
        @endfor 
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray12[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray12[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor 
        </tr>

        <tr>
            <td style="text-align: center; background-color: #F8CBAD">13</td>
            <td style="text-align: center; background-color: #F8CBAD">Lipat Kain</td>
        @for ($i = 1; $i < 13; $i++) 
            <td style="text-align: center; background-color: white">{{ $noarray13[$i] }}</td>
        @endfor  
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
            @if ($performarray13[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
           
            @elseif ($performarray13[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
        @endfor
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
            @for ($i = 0; $i < 12; $i++)
                <td style="text-align: center; background-color: white">{{ $jumlahtotal[$i] }}</td>
            @endfor
            <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
            @for ($i = 2; $i < 13; $i++)
                
            @if ($performarraytotal[$i] > 0)
                <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
       
            @elseif ($performarraytotal[$i] == 0)
                <td style="text-align: center;" class="bg-warning" >TETAP</td>
            @else
                <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
            @endif
            @endfor
        </tr>

      </table>
      <br><br>
      <center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori All Segmen Gangguan Permanen</h1></center><br>
      <table
                            class="table mb-0 table-hover table-dark table-wrapper-scroll-y "
                            style="font-size: .55rem; border-collapse: separate; color: black; font-size: 12px">
      <tr>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD; width: 10px">No</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >UP3</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >1</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;background-color: #B4C6E7 "  >2</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >3</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >4</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >5</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >6</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >7</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >8</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >9</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >10</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >11</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >12</th>
          <th colspan="12" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">POTRET KINERJA PENYULANG MoM</th>
        </tr>   
        <tr>
          <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Januari</th>
          <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  >Februari</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Maret</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >April</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >Mei</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >Juni</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >juli</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Agustus</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >September</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Oktober</th>
          <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >November</th>
          <th  style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Desember</th>
        </tr>
        <tr>
          <td style="text-align: center; background-color: #F8CBAD">1</td>
          <td style="text-align: center; background-color: #F8CBAD">Kota Barat</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray1P[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @for ($i = 2; $i < 13;  $i++)
          @if ($performarray1P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray1P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">2</td>
          <td style="text-align: center; background-color: #F8CBAD">Kota Timur</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray2P[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray2P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray2P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">3</td>
          <td style="text-align: center; background-color: #F8CBAD">Panam</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray3P[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray3P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray3P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">4</td>
          <td style="text-align: center; background-color: #F8CBAD">Simpang Tiga</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray4P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray4P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray4P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">5</td>
          <td style="text-align: center; background-color: #F8CBAD">Rumbai</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray5P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray5P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray5P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">6</td>
          <td style="text-align: center; background-color: #F8CBAD">Kampar</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray6P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray6P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray6P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">7</td>
          <td style="text-align: center; background-color: #F8CBAD">Bangkinang</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray7P[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray7P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray7P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">8</td>
          <td style="text-align: center; background-color: #F8CBAD">Ujung Batu</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray8P[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray8P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray8P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor  
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">9</td>
          <td style="text-align: center; background-color: #F8CBAD">Pasir Pangaraian</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray9P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray9P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray9P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">10</td>
          <td style="text-align: center; background-color: #F8CBAD">Siak Sri Indrapura</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray10P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray10P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray10P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">11</td>
          <td style="text-align: center; background-color: #F8CBAD">Perawang</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray11P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray11P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray11P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">12</td>
          <td style="text-align: center; background-color: #F8CBAD">Pangkalan Kerinci</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray12P[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray12P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray12P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">13</td>
          <td style="text-align: center; background-color: #F8CBAD">Lipat Kain</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray13P[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray13P[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray13P[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>
      <tr>
        <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
        @for ($i = 0; $i < 12; $i++)
            <td style="text-align: center; background-color: white">{{ $jumlahtotalpermanen[$i] }}</td>
        @endfor
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
                
        @if ($performarraytotalpermanen[$i] > 0)
            <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
       
        @elseif ($performarraytotalpermanen[$i] == 0)
            <td style="text-align: center;" class="bg-warning" >TETAP</td>
        @else
            <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
        @endif
        @endfor
    </tr>
      
    </table>

    <br><br>
    <center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori All Segmen Gangguan Temporer</h1></center><br>
    <table class="table mb-0 table-hover table-dark table-wrapper-scroll-y " style="font-size: .55rem; border-collapse: separate; color: black; font-size: 12px">
    <tr>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD; width: 10px">No</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >UP3</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >1</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;background-color: #B4C6E7 "  >2</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >3</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >4</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >5</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >6</th>
          <th rowspan="2" style="text-align: center;vertical-align: middle; background-color: #B4C6E7 "  >7</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >8</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >9</th>
          <th rowspan="2" style="text-align: center; background-color: #B4C6E7; vertical-align: middle; "  >10</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >11</th>
          <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #B4C6E7 "  >12</th>
          <th colspan="12" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">POTRET KINERJA PENYULANG MoM</th>
        </tr>   
        <tr>
          <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Januari</th>
          <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  >Februari</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Maret</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >April</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >Mei</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >Juni</th>
          <th  style="text-align: center;vertical-align: middle; background-color: #E2EFDA "  >juli</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Agustus</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >September</th>
          <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Oktober</th>
          <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >November</th>
          <th  style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Desember</th>
        </tr>
        <tr>
          <td style="text-align: center; background-color: #F8CBAD">1</td>
          <td style="text-align: center; background-color: #F8CBAD">Kota Barat</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray1T[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @for ($i = 2; $i < 13;  $i++)
          @if ($performarray1T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray1T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">2</td>
          <td style="text-align: center; background-color: #F8CBAD">Kota Timur</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray2T[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray2T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray2T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">3</td>
          <td style="text-align: center; background-color: #F8CBAD">Panam</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray3T[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray3T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray3T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">4</td>
          <td style="text-align: center; background-color: #F8CBAD">Simpang Tiga</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray4T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray4T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray4T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">5</td>
          <td style="text-align: center; background-color: #F8CBAD">Rumbai</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray5T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray5T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray5T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">6</td>
          <td style="text-align: center; background-color: #F8CBAD">Kampar</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray6T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray6T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray6T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">7</td>
          <td style="text-align: center; background-color: #F8CBAD">Bangkinang</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray7T[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray7T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray7T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAT</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">8</td>
          <td style="text-align: center; background-color: #F8CBAD">Ujung Batu</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray8T[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray8T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray8T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor  
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">9</td>
          <td style="text-align: center; background-color: #F8CBAD">Pasir Pangaraian</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray9T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray9T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray9T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">10</td>
          <td style="text-align: center; background-color: #F8CBAD">Siak Sri Indrapura</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray10T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray10T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray10T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">11</td>
          <td style="text-align: center; background-color: #F8CBAD">Perawang</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray11T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray11T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray11T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">12</td>
          <td style="text-align: center; background-color: #F8CBAD">Pangkalan Kerinci</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray12T[$i] }}</td>
      @endfor 
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray12T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray12T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor 
      </tr>

      <tr>
          <td style="text-align: center; background-color: #F8CBAD">13</td>
          <td style="text-align: center; background-color: #F8CBAD">Lipat Kain</td>
      @for ($i = 1; $i < 13; $i++) 
          <td style="text-align: center; background-color: white">{{ $noarray13T[$i] }}</td>
      @endfor  
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 2; $i < 13; $i++)
          @if ($performarray13T[$i] > 0)
              <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
         
          @elseif ($performarray13T[$i] == 0)
              <td style="text-align: center;" class="bg-warning" >TETAP</td>
          @else
              <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
          @endif
      @endfor
      </tr>
      <tr>
        <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
        @for ($i = 0; $i < 12; $i++)
            <td style="text-align: center; background-color: white">{{ $jumlahtotaltemporer[$i] }}</td>
        @endfor
        <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
        @for ($i = 2; $i < 13; $i++)
                
        @if ($performarraytotaltemporer[$i] > 0)
            <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
       
        @elseif ($performarraytotaltemporer[$i] == 0)
            <td style="text-align: center;" class="bg-warning" >TETAP</td>
        @else
            <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
        @endif
        @endfor
    </tr>
    </table>
       

     <br><br>
     @include('bagiankehandalan.segmenPMT');
     <br><br>
     @include('bagiankehandalan.segmenKeypoint');
     <br><br>
     @include('bagiankehandalan.saidi_saifi');
     <br><br>
     @include('bagiankehandalan.monitoring');

     <br>
     {{-- @include('buat'); --}}
    </div>
</div>
</div>
</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
              
@endsection