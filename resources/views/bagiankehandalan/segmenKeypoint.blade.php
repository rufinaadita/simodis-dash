<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori Segmen Keypoint Semua Gangguan </h1></center><br>
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[0][$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[0][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[0][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[1][$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($perform_Keypoint[1][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($perform_Keypoint[1][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[2][$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($perform_Keypoint[2][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($perform_Keypoint[2][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[3][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($perform_Keypoint[3][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($perform_Keypoint[3][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[4][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[4][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[4][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[5][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[5][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[5][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[6][$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[6][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[6][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[7][$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[7][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[7][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[8][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[8][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[8][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[9][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[9][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[9][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[10][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[10][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[10][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[11][$i] }}</td>
  @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[11][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[11][$i] == 0)
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
      <td style="text-align: center; background-color: white">{{ $noarrayKeypoint[12][$i] }}</td>
  @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($perform_Keypoint[12][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($perform_Keypoint[12][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>
  <tr>
      <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
      @for ($i = 0; $i < 12; $i++)
          <td style="text-align: center; background-color: white">{{ $jumlahtotal_Keypoint[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 1; $i < 12; $i++)
          
      @if ($performtotal_Keypoint[$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotal_Keypoint[$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
  </tr>

</table>
<br>
<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori Segmen Keypoint Gangguan Permanen</h1></center><br>
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[0][$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[0][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[0][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[1][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[1][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[1][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[2][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[2][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[2][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[3][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[3][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[4][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[4][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[4][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[4][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[5][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[5][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[5][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[6][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[6][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[6][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[7][$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[7][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[7][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[8][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[8][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[8][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[9][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[9][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[9][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[10][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[10][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[10][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[11][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[11][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[11][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayPermanenKeypoint[12][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12; $i++)
      @if ($performtotalP_Keypoint[12][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performtotalP_Keypoint[12][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
</tr>
<tr>
  <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
  @for ($i = 0; $i < 12; $i++)
      <td style="text-align: center; background-color: white">{{ $jumlahtotalpermanen_Keypoint[$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12; $i++)
      @if ($performPermanentotal_Keypoint[$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($performPermanentotal_Keypoint[$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
</tr>

</table>
<br>
<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Kategori Segmen Keypoint Gangguan Temporer </h1></center><br>
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[0][$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[0][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[0][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[1][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[1][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[1][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[2][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[2][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[2][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[3][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[3][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[3][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[4][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[4][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[4][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[5][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[5][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[5][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[6][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[6][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[6][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[7][$i] }}</td>
@endfor
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[7][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[7][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[8][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[8][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[8][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[9][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[9][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[9][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[10][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[10][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[10][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[11][$i] }}</td>
@endfor 
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[11][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[11][$i] == 0)
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
    <td style="text-align: center; background-color: white">{{ $noarrayTemporerKeypoint[12][$i] }}</td>
@endfor  
<td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
@for ($i = 1; $i < 12;  $i++)
    @if ($performtotalT_Keypoint[12][$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performtotalT_Keypoint[12][$i] == 0)
        <td style="text-align: center;" class="bg-warning" >TETAP</td>
    @else
        <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
    @endif
@endfor
</tr>
<tr>
  <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
  @for ($i = 0; $i < 12; $i++)
      <td style="text-align: center; background-color: white">{{ $jumlahtotaltemporer_Keypoint[$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
    @if ($performTtotal_Keypoint[$i] > 0)
        <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
   
    @elseif ($performTtotal_Keypoint[$i] == 0)
        <td style="text-align: center;" class="bg-warning" >TETAP</td>
    @else
        <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
    @endif
@endfor
</tr>
</table>
