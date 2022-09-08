<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">SAIDI </h1></center><br>
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
      <td style="text-align: center; background-color: #F8CBAD">ULP LIPAT KAIN</td>
  @for ($i = 1; $i < 13; $i++)
    <td style="text-align: center; background-color: white">{{ $SAIDI[0][$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[0][$i+1]-$SAIDI[0][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[0][$i+1]-$SAIDI[0][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">2</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP KAMPAR</td>
    @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[1][$i] }}</td>
    @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($SAIDI[1][$i+1]-$SAIDI[1][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($SAIDI[1][$i+1]-$SAIDI[1][$i] == 0)
      <td style="text-align: center;" class="bg-warning" >TETAP</td>
  @else
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @endif
@endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">3</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP SIAK SRI INDRAPURA</td>
    @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[2][$i] }}</td>
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($SAIDI[2][$i+1]-$SAIDI[2][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($SAIDI[2][$i+1]-$SAIDI[2][$i] == 0)
      <td style="text-align: center;" class="bg-warning" >TETAP</td>
  @else
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @endif
@endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">4</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PANGKALAN KERINCI</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[3][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($SAIDI[3][$i+1]-$SAIDI[3][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($SAIDI[3][$i+1]-$SAIDI[3][$i] == 0)
      <td style="text-align: center;" class="bg-warning" >TETAP</td>
  @else
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @endif
@endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">5</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP UJUNG BATU</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[4][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[4][$i+1]-$SAIDI[4][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[4][$i+1]-$SAIDI[4][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">6</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP BANGKINANG</td>
      @for ($i = 1; $i < 13; $i++)
    <td style="text-align: center; background-color: white">{{ $SAIDI[5][$i] }}</td>

  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[5][$i+1]-$SAIDI[5][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[5][$i+1]-$SAIDI[5][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">7</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PERAWANG</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[6][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[6][$i+1]-$SAIDI[6][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[6][$i+1]-$SAIDI[6][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">8</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP RUMBAI</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[7][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[7][$i+1]-$SAIDI[7][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[7][$i+1]-$SAIDI[7][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor  
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">9</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PEKANBARU KOTA BARAT</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[8][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[8][$i+1]-$SAIDI[8][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[8][$i+1]-$SAIDI[8][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">10</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP SIMPANG TIGA</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[9][$i] }}</td>
  
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[9][$i+1]-$SAIDI[9][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[9][$i+1]-$SAIDI[9][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">11</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PEKANBARU KOTA TIMUR</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[10][$i] }}</td>
  
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[10][$i+1]-$SAIDI[10][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[10][$i+1]-$SAIDI[10][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">12</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PASIR PANGARAIAN</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[11][$i] }}</td>
  
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[11][$i+1]-$SAIDI[11][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[11][$i+1]-$SAIDI[11][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">13</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PANAM</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIDI[12][$i] }}</td>
  
    @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIDI[12][$i+1]-$SAIDI[12][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIDI[12][$i+1]-$SAIDI[12][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>
  <tr>
      <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
      @for ($i = 1; $i < 13; $i++)
          <td style="text-align: center; background-color: white">{{ $arrayTotalSAIDI[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 1; $i < 12; $i++)
          
      @if ($arrayTotalSAIDI[$i+1] - $arrayTotalSAIDI[$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($arrayTotalSAIDI[$i+1] - $arrayTotalSAIDI[$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
  </tr>

</table>
<br>
<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">SAIFI</h1></center><br>
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
      <td style="text-align: center; background-color: #F8CBAD">ULP LIPAT KAIN</td>
  @for ($i = 1; $i < 13; $i++)
    <td style="text-align: center; background-color: white">{{ $SAIFI[0][$i] }}</td>
  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[0][$i+1]-$SAIFI[0][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[0][$i+1]-$SAIFI[0][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">2</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP KAMPAR</td>
    @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[1][$i] }}</td>
    @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($SAIFI[1][$i+1]-$SAIFI[1][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($SAIFI[1][$i+1]-$SAIFI[1][$i] == 0)
      <td style="text-align: center;" class="bg-warning" >TETAP</td>
  @else
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @endif
@endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">3</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP SIAK SRI INDRAPURA</td>
    @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[2][$i] }}</td>
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($SAIFI[2][$i+1]-$SAIFI[2][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($SAIFI[2][$i+1]-$SAIFI[2][$i] == 0)
      <td style="text-align: center;" class="bg-warning" >TETAP</td>
  @else
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @endif
@endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">4</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PANGKALAN KERINCI</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[3][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
  @if ($SAIFI[3][$i+1]-$SAIFI[3][$i] > 0)
      <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
  @elseif ($SAIFI[3][$i+1]-$SAIFI[3][$i] == 0)
      <td style="text-align: center;" class="bg-warning" >TETAP</td>
  @else
      <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
  @endif
@endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">5</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP UJUNG BATU</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[4][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[4][$i+1]-$SAIFI[4][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[4][$i+1]-$SAIFI[4][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">6</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP BANGKINANG</td>
      @for ($i = 1; $i < 13; $i++)
    <td style="text-align: center; background-color: white">{{ $SAIFI[5][$i] }}</td>

  @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[5][$i+1]-$SAIFI[5][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[5][$i+1]-$SAIFI[5][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">7</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PERAWANG</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[6][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[6][$i+1]-$SAIFI[6][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[6][$i+1]-$SAIFI[6][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">8</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP RUMBAI</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[7][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[7][$i+1]-$SAIFI[7][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[7][$i+1]-$SAIFI[7][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor  
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">9</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PEKANBARU KOTA BARAT</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[8][$i] }}</td>
  
    @endfor
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[8][$i+1]-$SAIFI[8][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[8][$i+1]-$SAIFI[8][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">10</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP SIMPANG TIGA</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[9][$i] }}</td>
  
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[9][$i+1]-$SAIFI[9][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[9][$i+1]-$SAIFI[9][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">11</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PEKANBARU KOTA TIMUR</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[10][$i] }}</td>
  
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td> 
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[10][$i+1]-$SAIFI[10][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[10][$i+1]-$SAIFI[10][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">12</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PASIR PANGARAIAN</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[11][$i] }}</td>
  
    @endfor 
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[11][$i+1]-$SAIFI[11][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[11][$i+1]-$SAIFI[11][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>

  <tr>
      <td style="text-align: center; background-color: #F8CBAD">13</td>
      <td style="text-align: center; background-color: #F8CBAD">ULP PANAM</td>
      @for ($i = 1; $i < 13; $i++)
      <td style="text-align: center; background-color: white">{{ $SAIFI[12][$i] }}</td>
  
    @endfor  
  <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
  @for ($i = 1; $i < 12;  $i++)
      @if ($SAIFI[12][$i+1]-$SAIFI[12][$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
     
      @elseif ($SAIFI[12][$i+1]-$SAIFI[12][$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
  @endfor
  </tr>
  <tr>
      <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
      @for ($i = 1; $i < 13; $i++)
          <td style="text-align: center; background-color: white">{{ $arrayTotalSAIFI[$i] }}</td>
      @endfor
      <td style="text-align: center; background-color: rgb(10, 153, 10)">BAIK</td>
      @for ($i = 1; $i < 12; $i++)
          
      @if ($arrayTotalSAIFI[$i+1] - $arrayTotalSAIFI[$i] > 0)
          <td style="text-align: center; color: white" class="bg-danger" >BURUK</td>
 
      @elseif ($arrayTotalSAIFI[$i+1] - $arrayTotalSAIFI[$i] == 0)
          <td style="text-align: center;" class="bg-warning" >TETAP</td>
      @else
          <td style="text-align: center; background-color: rgb(10, 153, 10)" >BAIK</td>
      @endif
      @endfor
  </tr>

</table>
<br>
<br>

