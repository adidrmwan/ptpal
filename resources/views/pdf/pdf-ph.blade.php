<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All User data To PDF</title>
    <style>
    	table {
    		width:100%;
        font-size: 12px;
    	}
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
        font-size: 12px;
		}
		th, td {
		    padding: 5px;
		    text-align: left;
        font-size: 12px;
		}
	</style>
  </head>
  <body>
  	@foreach($users as $data)
    <div>
      <table>
      	<tr style="text-align: center;">
      		<th colspan="6" style="text-align: center;">
      		MOBILE CRANE / PH CRANE <br>
          PRE-OPERATIONAL INSPECTION CHECKLIST <br>
          (CHECKLIST INSPEKSI HARIAN SEBELUM PENGGOPERASIAN CRANE)
          </th>
        </tr>
<tr>
                                                <th>Nama Mesin</th>
                                                <td>{{$data->nama_mesin}}</td>
                                                <th>Bengkel</th>
                                                <td>{{$data->bengkel}}</td>
                                                <th>Hari/Tanggal</th>
                                                <td>{{$data->tgl_inspeksi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Kode Mesin</th>
                                                <td>{{$data->kode_mesin}}</td>
                                                <th>Shift/Hour</th>
                                                <td>{{$data->shift_hour}}</td>
                                                <th>Divisi</th>
                                                <td>{{$data->divisi}}</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3">Operator/Petugas</th>
                                                <td colspan="3">{{$data->name}}</td>
                                            </tr>
      </table>

                                        <table>
                                            <tr>
                                                <th><span>No</span></th>
                                                <th style="text-align: center;"><span>UNIT PERLENGKAPAN <br>YANG DIPERIKSA</span></th>
                                                <th style="text-align: center;"><span>KONDISI</span></th>
                                                <th style="text-align: center;"><span>KETERANGAN</span></th>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">1</td>
                                                <td>Outriggers dan boxes</td>
                                                @if($data->checklist_1 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_1}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">2</td>
                                                <td>Drive train dan suspension</td>
                                                @if($data->checklist_2 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_2}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">3</td>
                                                <td>Brakes</td>
                                                @if($data->checklist_3 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_3}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">4</td>
                                                <td>Hook rollers dan assembly</td>
                                                @if($data->checklist_4 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_4}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">5</td>
                                                <td>Slew ring dan slew ring bolts</td>
                                                @if($data->checklist_5 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_5}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">6</td>
                                                <td>Wire rope dan rope sheaves</td>
                                                @if($data->checklist_6 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_6}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">7</td>
                                                <td>Drive systems ( winches, hydraulic motors, gearboxes, drive-shafts )</td>
                                                @if($data->checklist_7 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_5}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">8</td>
                                                <td>Control systems</td>
                                                @if($data->checklist_8 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_8}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">9</td>
                                              <td>Electrical systems</td>
                                              @if($data->checklist_9 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_9}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">10</td>
                                              <td>Oil leakage</td>
                                              @if($data->checklist_10 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_10}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">11</td>
                                              <td>Booms</td>
                                              @if($data->checklist_11 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_11}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">12</td>
                                              <td>Electric motors</td>
                                              @if($data->checklist_12 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_12}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">13</td>
                                              <td>Handrails</td>
                                              @if($data->checklist_13 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_13}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">14</td>
                                              <td>Cab glass and wipers</td>
                                              @if($data->checklist_14 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_14}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">15</td>
                                              <td>Crane tracks</td>
                                              @if($data->checklist_15 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_15}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">16</td>
                                              <td>Safety devices</td>
                                              @if($data->checklist_16 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_16}}</td>
                                            </tr>
                                            <tr>
                                              <td colspan="4"><b>CATATAN TEMUAN/SARAN/KESIMPULAN</b>
                                                <br>
                                              {{$data->catatan}}</td>
                                            </tr>
                                        </table>
    </div>
    @endforeach
    <div>
      <h3><b>NB :</b></h3>
      <p>*) Baik, apabila kondisi mesin crane dalam keadaan normal masalah kecil dan telah dilakukan problemshooting oleh operator</p>
      <p>***) Tidak baik, apabila kondisi mesin crane dalam keadaan tidak normal. Perlu dilakukan pengecekan dan perbaikan oleh pihak maintenance</p>
    </div>
  </body>
</html>