<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Raport Kehandalan Komulatif </h1></center><br>
            <table class="table mb-0 table-hover table-dark table-wrapper-scroll-y " style="font-size: .55rem; border-collapse: separate; color: black; font-size: 13.28px;">
                <tr>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD; width: 10px">No</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >UP3</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">All Segmen</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">Segmen PMT</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">Segmen Keypoint</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >SAIDI</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >SAIFI</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >S.d Des</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >Rank Kom</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">All Segmen</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">Segmen PMT</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">Segmen Keypoint</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >SAIDI</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >SAIFI</th>
                </tr>   
                <tr>
                    <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                 

                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                </tr>
                <tr>
                  <td style="text-align: center; background-color: #F8CBAD">1</td>
                  <td style="text-align: center; background-color: #F8CBAD">Kota Barat</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[0] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[8]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[8]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[0]+$reratakehandalanTemporer[0]+$reratakehandalanPermanen[0]+$reratakehandalanAll_PMT[0]+$reratakehandalanPermanen_PMT[0]+$reratakehandalanTemporer_PMT[0]+$reratakehandalanAll_Keypoint[0]+$reratakehandalanTemporer_Keypoint[0]+$reratakehandalanPermanen_Keypoint[0]+$rerataSAIDI[8]*100+$rerataSAIFI[8]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[8] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">2</td>
                  <td style="text-align: center; background-color: #F8CBAD">Kota Timur</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[1] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[10]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[10]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[1]+$reratakehandalanTemporer[1]+$reratakehandalanPermanen[1]+$reratakehandalanAll_PMT[1]+$reratakehandalanPermanen_PMT[1]+$reratakehandalanTemporer_PMT[1]+$reratakehandalanAll_Keypoint[1]+$reratakehandalanTemporer_Keypoint[1]+$reratakehandalanPermanen_Keypoint[1]+$rerataSAIDI[10]*100+$rerataSAIFI[10]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[10] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">3</td>
                  <td style="text-align: center; background-color: #F8CBAD">Panam</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[2] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[12]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[12]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[2]+$reratakehandalanTemporer[2]+$reratakehandalanPermanen[2]+$reratakehandalanAll_PMT[2]+$reratakehandalanPermanen_PMT[2]+$reratakehandalanTemporer_PMT[2]+$reratakehandalanAll_Keypoint[2]+$reratakehandalanTemporer_Keypoint[2]+$reratakehandalanPermanen_Keypoint[2]+$rerataSAIDI[12]*100+$rerataSAIFI[12]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[12] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">4</td>
                  <td style="text-align: center; background-color: #F8CBAD">Simpang Tiga</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[3] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[9]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[9]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[3]+$reratakehandalanTemporer[3]+$reratakehandalanPermanen[3]+$reratakehandalanAll_PMT[3]+$reratakehandalanPermanen_PMT[3]+$reratakehandalanTemporer_PMT[3]+$reratakehandalanAll_Keypoint[3]+$reratakehandalanTemporer_Keypoint[3]+$reratakehandalanPermanen_Keypoint[3]+$rerataSAIDI[9]*100+$rerataSAIFI[9]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[9] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">5</td>
                  <td style="text-align: center; background-color: #F8CBAD">Rumbai</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[4] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[7]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[7]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[4]+$reratakehandalanTemporer[4]+$reratakehandalanPermanen[4]+$reratakehandalanAll_PMT[4]+$reratakehandalanPermanen_PMT[4]+$reratakehandalanTemporer_PMT[4]+$reratakehandalanAll_Keypoint[4]+$reratakehandalanTemporer_Keypoint[4]+$reratakehandalanPermanen_Keypoint[4]+$rerataSAIDI[7]*100+$rerataSAIFI[7]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[7] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">6</td>
                  <td style="text-align: center; background-color: #F8CBAD">Kampar</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[5] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[1]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[1]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[5]+$reratakehandalanTemporer[5]+$reratakehandalanPermanen[5]+$reratakehandalanAll_PMT[5]+$reratakehandalanPermanen_PMT[5]+$reratakehandalanTemporer_PMT[5]+$reratakehandalanAll_Keypoint[5]+$reratakehandalanTemporer_Keypoint[5]+$reratakehandalanPermanen_Keypoint[5]+$rerataSAIDI[1]*100+$rerataSAIFI[1]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[1] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[1] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">7</td>
                  <td style="text-align: center; background-color: #F8CBAD">Bangkinang</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[6] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[5]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[5]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[6]+$reratakehandalanTemporer[6]+$reratakehandalanPermanen[6]+$reratakehandalanAll_PMT[6]+$reratakehandalanPermanen_PMT[6]+$reratakehandalanTemporer_PMT[6]+$reratakehandalanAll_Keypoint[6]+$reratakehandalanTemporer_Keypoint[6]+$reratakehandalanPermanen_Keypoint[6]+$rerataSAIDI[5]*100+$rerataSAIFI[5]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[5] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[5] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">8</td>
                  <td style="text-align: center; background-color: #F8CBAD">Ujung Batu</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[7] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[4]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[4]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[7]+$reratakehandalanTemporer[7]+$reratakehandalanPermanen[7]+$reratakehandalanAll_PMT[7]+$reratakehandalanPermanen_PMT[7]+$reratakehandalanTemporer_PMT[7]+$reratakehandalanAll_Keypoint[7]+$reratakehandalanTemporer_Keypoint[7]+$reratakehandalanPermanen_Keypoint[7]+$rerataSAIDI[4]*100+$rerataSAIFI[4]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[7] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[4] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[4] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">9</td>
                  <td style="text-align: center; background-color: #F8CBAD">Pasir Pangaraian</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[8] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[11]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[11]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[8]+$reratakehandalanTemporer[8]+$reratakehandalanPermanen[8]+$reratakehandalanAll_PMT[8]+$reratakehandalanPermanen_PMT[8]+$reratakehandalanTemporer_PMT[8]+$reratakehandalanAll_Keypoint[8]+$reratakehandalanTemporer_Keypoint[8]+$reratakehandalanPermanen_Keypoint[8]+$rerataSAIDI[11]*100+$rerataSAIFI[11]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[8] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[11] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">10</td>
                  <td style="text-align: center; background-color: #F8CBAD">Siak Sri Indrapura</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[9] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[2]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[2]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[9]+$reratakehandalanTemporer[9]+$reratakehandalanPermanen[9]+$reratakehandalanAll_PMT[9]+$reratakehandalanPermanen_PMT[9]+$reratakehandalanTemporer_PMT[9]+$reratakehandalanAll_Keypoint[9]+$reratakehandalanTemporer_Keypoint[9]+$reratakehandalanPermanen_Keypoint[9]+$rerataSAIDI[2]*100+$rerataSAIFI[2]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[9] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[2] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[2] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">11</td>
                  <td style="text-align: center; background-color: #F8CBAD">Perawang</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[10] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[6]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[6]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[10]+$reratakehandalanTemporer[10]+$reratakehandalanPermanen[10]+$reratakehandalanAll_PMT[10]+$reratakehandalanPermanen_PMT[10]+$reratakehandalanTemporer_PMT[10]+$reratakehandalanAll_Keypoint[10]+$reratakehandalanTemporer_Keypoint[10]+$reratakehandalanPermanen_Keypoint[10]+$rerataSAIDI[6]*100+$rerataSAIFI[6]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[10] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[6] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[6] }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">12</td>
                  <td style="text-align: center; background-color: #F8CBAD">Pangkalan Kerinci</td>
               
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[11] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[3]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[3]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[11]+$reratakehandalanTemporer[11]+$reratakehandalanPermanen[11]+$reratakehandalanAll_PMT[11]+$reratakehandalanPermanen_PMT[11]+$reratakehandalanTemporer_PMT[11]+$reratakehandalanAll_Keypoint[11]+$reratakehandalanTemporer_Keypoint[11]+$reratakehandalanPermanen_Keypoint[11]+$rerataSAIDI[3]*100+$rerataSAIFI[3]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[11] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[3] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[3] }}</td>
              </tr>
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">13</td>
                  <td style="text-align: center; background-color: #F8CBAD">Lipat Kain</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_PMT[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_PMT[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_PMT[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanAll_Keypoint[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanTemporer_Keypoint[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $reratakehandalanPermanen_Keypoint[12] }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIDI[0]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rerataSAIFI[0]*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round(($reratakehandalanAll[12]+$reratakehandalanTemporer[12]+$reratakehandalanPermanen[12]+$reratakehandalanAll_PMT[12]+$reratakehandalanPermanen_PMT[12]+$reratakehandalanTemporer_PMT[12]+$reratakehandalanAll_Keypoint[12]+$reratakehandalanTemporer_Keypoint[12]+$reratakehandalanPermanen_Keypoint[12]+$rerataSAIDI[0]*100+$rerataSAIFI[0]*100)/11) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $Rank_komulatif[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_PMT[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_PMT[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_PMT[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankAll_Keypoint[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankTemporer_Keypoint[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankPermanen_Keypoint[12] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIDI1[0] }}</td>
                  <td style="text-align: center; background-color: white">{{ $rankSAIFI1[0] }}</td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td>
                @foreach ($totalUP3 as $it)
                    <td style="text-align: center; background-color: white">{{ $it }}</td>
                @endforeach
                <td colspan="15" style="background-color: white"></td>  
              </tr>  
              </table>
              <br><br>
              <center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: brown">Raport Kehandalan Bulanan </h1></center><br>
              <table class="table mb-0 table-hover table-dark table-wrapper-scroll-y " style="font-size: .55rem; border-collapse: separate; color: black; font-size: 12px">
                <tr>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD; width: 10px">No</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >UP3</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">All Segmen</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">Segmen PMT</th>
                  <th colspan="3" style="vertical-align: middle; text-align: center; background-color: #E2EFDA ">Segmen Keypoint</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >SAIDI</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >SAIFI</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >Des</th>
                  <th rowspan="2" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >Rank Des</th>
                  <th colspan="12" style="vertical-align: middle; text-align: center; background-color: #F8CBAD;"  >PERGERAKARAN RANKING RAPOT KINERJA KEHANDALAN MASING-MASING ULP</th>
                </tr>   
                <tr>
                    <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >All</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  ><5</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >>5</th>
                 

                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Januari</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  >Februari</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Maret</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >April</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  >Mei</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Juni</th>
                  <th style="vertical-align: middle; text-align: center; background-color: #E2EFDA "  >Juli</th>
                  <th style="text-align: center; vertical-align: middle;background-color: #E2EFDA "  >Agustus</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >September</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Oktober</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >November</th>
                  <th  style="text-align: center; background-color: #E2EFDA; vertical-align: middle; "  >Desember</th>
                </tr>
                <tr>
                  <td style="text-align: center; background-color: #F8CBAD">1</td>
                  <td style="text-align: center; background-color: #F8CBAD">Kota Barat</td>
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[0][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[0][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[0][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[8][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[8][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[8]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[8]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[8] as $rank)
                    <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                  @endforeach
                  <td style="text-align: center; background-color: white">{{ $rankDes[8]  }}</td>

              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">2</td>
                  <td style="text-align: center; background-color: #F8CBAD">Kota Timur</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[1][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[1][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[1][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[10][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[10][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[10]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[10]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[10] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[10]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">3</td>
                  <td style="text-align: center; background-color: #F8CBAD">Panam</td>
               
                  <td style="text-align: center; background-color: white">{{ round($h1 = $kehandalanAll[2][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h2 = $kehandalanTemporer[2][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h3 = $kehandalanPermanen[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h4 = $kehandalanAll_PMT[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h5 = $kehandalanTemporer_PMT[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h6 = $kehandalanPermanen_PMT[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h7 = $kehandalanAll_Keypoint[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h8 = $kehandalanTemporer_Keypoint[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h9 = $kehandalanPermanen_Keypoint[2][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h10 = $set[12][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h11 = $setSAIFI[12][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[12]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[12]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[12] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[12]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">4</td>
                  <td style="text-align: center; background-color: #F8CBAD">Simpang Tiga</td>
               
                  <td style="text-align: center; background-color: white">{{ round($h1 = $kehandalanAll[3][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h2 = $kehandalanTemporer[3][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h3 = $kehandalanPermanen[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h4 = $kehandalanAll_PMT[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h5 = $kehandalanTemporer_PMT[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h6 = $kehandalanPermanen_PMT[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h7 = $kehandalanAll_Keypoint[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h8 = $kehandalanTemporer_Keypoint[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h9 = $kehandalanPermanen_Keypoint[3][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h10 = $set[9][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($h11 = $setSAIFI[9][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[9]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[9]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[9] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[9]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">5</td>
                  <td style="text-align: center; background-color: #F8CBAD">Rumbai</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[4][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[4][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[4][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[7][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[7][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[7]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[7]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[7] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[7]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">6</td>
                  <td style="text-align: center; background-color: #F8CBAD">Kampar</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[5][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[5][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[5][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[1][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[1][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[1]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[1]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[1] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[1]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">7</td>
                  <td style="text-align: center; background-color: #F8CBAD">Bangkinang</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[6][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[6][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[6][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[5][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[5][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[5]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[5]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[5] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[5]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">8</td>
                  <td style="text-align: center; background-color: #F8CBAD">Ujung Batu</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[7][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[7][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[7][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[4][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[4][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[4]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[4]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[4] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[4]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">9</td>
                  <td style="text-align: center; background-color: #F8CBAD">Pasir Pangaraian</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[8][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[8][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[8][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[11][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[11][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[11]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[11]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[11] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[11]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">10</td>
                  <td style="text-align: center; background-color: #F8CBAD">Siak Sri Indrapura</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[9][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[9][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[9][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[2][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[2][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[2]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[2]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[2] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[2]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">11</td>
                  <td style="text-align: center; background-color: #F8CBAD">Perawang</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[10][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[10][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[10][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[6][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[6][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[6]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[6]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[6] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[6]  }}</td>
              </tr>
              
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">12</td>
                  <td style="text-align: center; background-color: #F8CBAD">Pangkalan Kerinci</td>
               
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[11][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[11][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[11][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[3][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[3][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[3]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[3]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[3] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[3]  }}</td>
              </tr>
              <tr>
                  <td style="text-align: center; background-color: #F8CBAD">13</td>
                  <td style="text-align: center; background-color: #F8CBAD">Lipat Kain</td>
                  <td style="text-align: center; background-color: white">{{ $h1 = round($kehandalanAll[12][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h2 = round($kehandalanTemporer[12][10]) * 100}}%</td>
                  <td style="text-align: center; background-color: white">{{ $h3 = round($kehandalanPermanen[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h4 = round($kehandalanAll_PMT[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h5 = round($kehandalanTemporer_PMT[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h6 = round($kehandalanPermanen_PMT[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h7 = round($kehandalanAll_Keypoint[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h8 = round($kehandalanTemporer_Keypoint[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h9 = round($kehandalanPermanen_Keypoint[12][10])* 100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h10 = round($set[0][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ $h11 = round($setSAIFI[0][11])*100 }}%</td>
                  <td style="text-align: center; background-color: white">{{ round($buat[0]) }}%</td>
                  <td style="text-align: center; background-color: white">{{ $rankDes[0]  }}</td>
                  <td style="text-align: center; background-color: white">{{ 1 }}</td>
                  @foreach ($rankBul[0] as $rank)
                  <td style="text-align: center; background-color: white">{{ $rank  }}</td>    
                @endforeach
                <td style="text-align: center; background-color: white">{{ $rankDes[0]  }}</td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: center; background-color: #F8CBAD">UP3 Pekanbaru</td> 
                <td style="text-align: center; background-color: white">{{ (($jumlahtotal[11] - $jumlahtotal[10])/$jumlahtotal[10]) *100    }}%</td>
                <td style="text-align: center; background-color: white">{{ (($jumlahtotaltemporer[11] - $jumlahtotaltemporer[10])/$jumlahtotaltemporer[10]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ (($jumlahtotalpermanen[11] - $jumlahtotalpermanen[10])/$jumlahtotalpermanen[10]) *100  }}%</td> 
                <td style="text-align: center; background-color: white">{{ (($jumlahtotal_PMT[11] - $jumlahtotal_PMT[10])/$jumlahtotal_PMT[10]) *100  }}</td>
                <td style="text-align: center; background-color: white">{{ (($jumlahtotaltemporer_PMT[11] - $jumlahtotaltemporer_PMT[10])/$jumlahtotaltemporer_PMT[10]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ (($jumlahtotalpermanen_PMT[11] - $jumlahtotalpermanen_PMT[10])/$jumlahtotalpermanen_PMT[10]) *100  }}%</td> 
                <td style="text-align: center; background-color: white">{{ (($jumlahtotal_Keypoint[11] - $jumlahtotal_Keypoint[10])/$jumlahtotal_Keypoint[10]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ (($jumlahtotaltemporer_Keypoint[11] - $jumlahtotaltemporer_Keypoint[10])/$jumlahtotaltemporer_Keypoint[10]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ (($jumlahtotalpermanen_Keypoint[11] - $jumlahtotalpermanen_Keypoint[10])/$jumlahtotalpermanen_Keypoint[10]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ (($arrayTotalSAIDI[12] - $arrayTotalSAIDI[11])/$arrayTotalSAIDI[11]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ (($arrayTotalSAIFI[12] - $arrayTotalSAIFI[11])/$arrayTotalSAIFI[11]) *100  }}%</td>
                <td style="text-align: center; background-color: white">{{ round((((($jumlahtotal[11] - $jumlahtotal[10])/$jumlahtotal[10]) *100) + ((($jumlahtotaltemporer[11] - $jumlahtotaltemporer[10])/$jumlahtotaltemporer[10]) *100) + ((($jumlahtotalpermanen[11] - $jumlahtotalpermanen[10])/$jumlahtotalpermanen[10]) *100) + ((($jumlahtotal_PMT[11] - $jumlahtotal_PMT[10])/$jumlahtotal_PMT[10]) *100) + ((($jumlahtotaltemporer_PMT[11] - $jumlahtotaltemporer_PMT[10])/$jumlahtotaltemporer_PMT[10]) *100) + ((($jumlahtotalpermanen_PMT[11] - $jumlahtotalpermanen_PMT[10])/$jumlahtotalpermanen_PMT[10]) *100) + ((($jumlahtotal_Keypoint[11] - $jumlahtotal_Keypoint[10])/$jumlahtotal_Keypoint[10]) *100) + ((($jumlahtotaltemporer_Keypoint[11] - $jumlahtotaltemporer_Keypoint[10])/$jumlahtotaltemporer_Keypoint[10]) *100) + ((($jumlahtotalpermanen_Keypoint[11] - $jumlahtotalpermanen_Keypoint[10])/$jumlahtotalpermanen_Keypoint[10]) *100) + ((($arrayTotalSAIDI[12] - $arrayTotalSAIDI[11])/$arrayTotalSAIDI[11]) *100) + ((($arrayTotalSAIFI[12] - $arrayTotalSAIFI[11])/$arrayTotalSAIFI[11]) *100)) /12)  }}%</td>
                <td colspan="13" style="background-color: white"></td>
              </tr>  
              </table>
