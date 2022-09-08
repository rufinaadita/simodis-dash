<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori Segmen PMT Semua Gangguan </h1></center><br>
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
      <td style="text-align: center; background-color: white">{{ $noarray1PMT[$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[0][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[0][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray2PMT[$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($perform_PMT[1][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($perform_PMT[1][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray3PMT[$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($perform_PMT[2][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($perform_PMT[2][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray4PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($perform_PMT[3][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($perform_PMT[3][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray5PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[4][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[4][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray6PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[5][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[5][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray7PMT[$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[6][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[6][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray8PMT[$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[7][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[7][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray9PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[8][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[8][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray10PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[9][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[9][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray11PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[10][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[10][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray12PMT[$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[11][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[11][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarray13PMT[$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_PMT[12][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_PMT[12][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>
  <tr>
      <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
      @for ($i = 0; $i < 12; $i++)
          <td style="text-align: center; background-color: white">{{ $jumlahtotal_PMT[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 1; $i < 12; $i++)
          
      @if ($performtotal_PMT[$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotal_PMT[$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
  </tr>

</table>
<br>
<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori Segmen PMT Gangguan Permanen</h1></center><br>
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
    <td style="text-align: center; background-color: white">{{ $noarray1P_PMT[$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[0][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[0][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray2P_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[1][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[1][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray3P_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[2][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[2][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray4P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[3][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[4][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray5P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[4][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[4][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray6P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[5][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[5][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray7P_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[6][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[6][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray8P_PMT[$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[7][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[7][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray9P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[8][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[8][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray10P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[9][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[9][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray11P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[10][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[10][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray12P_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[11][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[11][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray13P_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_PMT[12][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_PMT[12][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
</tr>
<tr>
  <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
  @for ($i = 0; $i < 12; $i++)
      <td style="text-align: center; background-color: white">{{ $jumlahtotalpermanen_PMT[$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12; $i++)
      @if ($performPermanentotal_PMT[$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performPermanentotal_PMT[$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
</tr>

</table>
<br>
<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori Segmen PMT Gangguan Temporer </h1></center><br>
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
    <td style="text-align: center; background-color: white">{{ $noarray1T_PMT[$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[0][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[0][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray2T_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[1][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[1][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray3T_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[2][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[2][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray4T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[3][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[3][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray5T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[4][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[4][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray6T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[5][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[5][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray7T_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[6][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[6][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray8T_PMT[$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[7][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[7][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray9T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[8][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[8][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray10T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[9][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[9][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray11T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[10][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[10][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray12T_PMT[$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[11][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[11][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarray13T_PMT[$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_PMT[12][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_PMT[12][$i] == 0)
        <td style="text-align: center;" class="bg-warning" >TETAP</td>
    @else
        <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
    @endif
@endfor
</tr>
<tr>
  <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
  @for ($i = 0; $i < 12; $i++)
      <td style="text-align: center; background-color: white">{{ $jumlahtotaltemporer_PMT[$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
    @if ($performTtotal_PMT[$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performTtotal_PMT[$i] == 0)
        <td style="text-align: center;" class="bg-warning" >TETAP</td>
    @else
        <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
    @endif
@endfor
</tr>

</table>

