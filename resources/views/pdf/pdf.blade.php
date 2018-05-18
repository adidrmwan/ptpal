<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All User data To PDF</title>
    <style>
    	table {
    		width:100%;
    	}
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td {
		    padding: 5px;
		    text-align: left;
		}
	</style>
  </head>
  <body>
  	@foreach($users as $data)
    <div>
      <table>
      	<tr style="text-align: center;">
      		<th colspan="3" style="text-align: center;">
      		GOLIATH 300 TON GANTRY CRANE <br>
            PRE-OPERATIONAL INSPECTION CHECKLIST <br>
            (CHECKLIST INSPEKSI HARIAN SEBELUM PENGGOPERASIAN CRANE)
            </th>
        </tr>
        <tr>
        	<th><span>Nama Mesin : </span>{{$data->nama_mesin}}</th>
        	<th><span>Bengkel : </span>{{$data->bengkel}}</th>
        	<th><span>Departemen : </span>{{$data->department}}</th>
        </tr>
        <tr>
        	<th><span>Kode Mesin : </span>{{$data->kode_mesin}}</th>
        	<th><span>Hari/Tanggal : </span>{{$data->tgl_inspeksi}}</th>
        	<th><span>Divisi : </span>{{$data->divisi}}</th>
        </tr>
        <tr>
        	<th><span>Shift/Hour : </span>{{$data->shift_hour}}</th>
        	<th colspan="2"><span>Operator/Petugas : </span>{{$data->name}}</th>
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
      		<td>Tagged crane and hoist</td>
      		@if($data->checklist_1 == 1)
      			<td style="text-align: center;">Baik</td>
      		@else
      			<td style="text-align: center;">Tidak Baik</td>
      		@endif
      		<td>{{$data->ket_1}}</td>
      	</tr>
      	<tr>
      		<td style="width: 2%;">2</td>
      		<td>Control Devices</td>
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
      		<td>Hook dan hook latch</td>
      		@if($data->checklist_4 == 1)
      			<td style="text-align: center;">Baik</td>
      		@else
      			<td style="text-align: center;">Tidak Baik</td>
      		@endif
      		<td>{{$data->ket_4}}</td>
      	</tr>
      	<tr>
      		<td style="width: 2%;">5</td>
      		<td>Rail long travel dan rail cross travel</td>
      		@if($data->checklist_5 == 1)
      			<td style="text-align: center;">Baik</td>
      		@else
      			<td style="text-align: center;">Tidak Baik</td>
      		@endif
      		<td>{{$data->ket_5}}</td>
      	</tr>
      	<tr>
      		<td style="width: 2%;">6</td>
      		<td>Wire rope</td>
      		@if($data->checklist_6 == 1)
      			<td style="text-align: center;">Baik</td>
      		@else
      			<td style="text-align: center;">Tidak Baik</td>
      		@endif
      		<td>{{$data->ket_6}}</td>
      	</tr>
      	<tr>
      		<td style="width: 2%;">7</td>
      		<td>Load Chain</td>
      		@if($data->checklist_7 == 1)
      			<td style="text-align: center;">Baik</td>
      		@else
      			<td style="text-align: center;">Tidak Baik</td>
      		@endif
      		<td>{{$data->ket_5}}</td>
      	</tr>
      	<tr>
      		<td style="width: 2%;">8</td>
      		<td>Reeving</td>
      		@if($data->checklist_8 == 1)
      			<td style="text-align: center;">Baik</td>
      		@else
      			<td style="text-align: center;">Tidak Baik</td>
      		@endif
      		<td>{{$data->ket_8}}</td>
      	</tr>
        <tr>
          <td style="width: 2%;">9</td>
          <td>Limit Switches</td>
          @if($data->checklist_9 == 1)
            <td style="text-align: center;">Baik</td>
          @else
            <td style="text-align: center;">Tidak Baik</td>
          @endif
          <td>{{$data->ket_9}}</td>
        </tr>
        <tr>
          <td style="width: 2%;">10</td>
          <td>Pelumasan bearing, wires, gear reducers hydraulic units, dll</td>
          @if($data->checklist_10 == 1)
            <td style="text-align: center;">Baik</td>
          @else
            <td style="text-align: center;">Tidak Baik</td>
          @endif
          <td>{{$data->ket_10}}</td>
        </tr>
        <tr>
          <td style="width: 2%;">11</td>
          <td>Fuctional switch, controller, alarm, signal indicator, voltage</td>
          @if($data->checklist_11 == 1)
            <td style="text-align: center;">Baik</td>
          @else
            <td style="text-align: center;">Tidak Baik</td>
          @endif
          <td>{{$data->ket_11}}</td>
        </tr>
        <tr>
          <td style="width: 2%;">12</td>
          <td>Rigging</td>
          @if($data->checklist_12 == 1)
            <td style="text-align: center;">Baik</td>
          @else
            <td style="text-align: center;">Tidak Baik</td>
          @endif
          <td>{{$data->ket_12}}</td>
        </tr>
        <tr>
          <td style="width: 2%;">13</td>
          <td>Crane Tracks</td>
          @if($data->checklist_13 == 1)
            <td style="text-align: center;">Baik</td>
          @else
            <td style="text-align: center;">Tidak Baik</td>
          @endif
          <td>{{$data->ket_13}}</td>
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