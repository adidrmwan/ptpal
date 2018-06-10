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
  	@foreach($maintenance as $data)
    <div>
                                        <table class="table table-bordered">
                                            <tr style="text-align: center;">
                                                <th colspan="6" style="text-align: center;">LAPORAN HASIL CEK<br>MAINTENANCE</th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="width: 15%">Nama Mesin</th>
                                                <td style="width: 15%">{{$data->nama_mesin}}</td>
                                                <th style="width: 15%">Kode Mesin</th>
                                                <td style="width: 15%">{{$data->kode_mesin}}</td>
                                                <th style="width: 15%">Bengkel</th>
                                                <td style="width: 15%">{{$data->bengkel}}</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Operator/Petugas</th>
                                                <td colspan="2">{{$data->name}}</td>
                                                <th>Divisi</th>
                                                <td>{{$data->divisi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Mulai</th>
                                                <td>{{$data->tgl_mulai}}</td>
                                                <th>Hari/Tanggal</th>
                                                <td>{{$data->tgl_inspeksi}}</td>
                                                <th rowspan="2">Pelaksana</th>
                                                <td rowspan="2"></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Selesai</th>
                                                <td>{{$data->tgl_selesai}}</td>
                                                <th>Waktu Total (jam)</th>
                                                <td>{{$waktutotal}}</td>
                                            </tr>
                                        </table>

                                        <table class="table table-bordered">
                                          <tr>
                                            <th colspan="4" style="text-align: center;">PROBLEM</th>
                                          </tr>
                                          <tr>
                                            <th colspan="2" style="text-align: center; width: 50%">Kategori A</th>
                                            <th colspan="2" style="text-align: center; width: 50%">Kategori B</th>
                                          </tr>
                                          <tr>
                                            @if(!empty($data->problem_kat_A_1))
                                            <td style="text-align: center; width: 2%;"><b>X</b></td>
                                            <td style="width: 48%;">Pergantian</td>
                                            @else
                                            <td style="width: 2%;"></td>
                                            <td style="width: 48%;">Pergantian</td>
                                            @endif

                                            @if(!empty($data->problem_kat_B_1))
                                            <td style="text-align: center; width: 2%;"><b>X</b></td>
                                            <td style="width: 48%;">Perbaikan Mesin</td>
                                            @else
                                            <td style="width: 2%;"></td>
                                            <td style="width: 48%;">Perbaikan Mesin</td>
                                            @endif
                                          </tr>
                                          <tr>
                                            @if(!empty($data->problem_kat_A_2))
                                            <td style="text-align: center; width: 2%;"><b>X</b></td>
                                            <td style="width: 48%;">Penambahan Alat/Komponen</td>
                                            @else
                                            <td style="width: 2%;"></td>
                                            <td style="width: 48%;">Penambahan Alat/Komponen</td>
                                            @endif

                                            @if(!empty($data->problem_kat_B_2))
                                            <td style="text-align: center; width: 2%;"><b>X</b>Modifikasi Alat/Komponen</td>
                                            <td style="width: 48%;"></td>
                                            @else
                                            <td style="width: 2%;"></td>
                                            <td style="width: 48%;">Modifikasi Alat/Komponen/td>
                                            @endif
                                          </tr>
                                          <tr>
                                            @if(!empty($data->problem_kat_A_3))
                                            <td style="text-align: center; width: 2%;"><b>X</b></td>
                                            <td style="width: 48%;">Penyimpangan</td>
                                            @else
                                            <td style="width: 2%;"></td>
                                            <td style="width: 48%;">Penyimpangan</td>
                                            @endif

                                            @if(!empty($data->problem_kat_B_3))
                                            <td style="text-align: center; width: 2%;"><b>X</b>Lain-lain</td>
                                            <td style="width: 48%;"></td>
                                            @else
                                            <td style="width: 2%;"></td>
                                            <td style="width: 48%;">Lain-lain</td>
                                            @endif
                                          </tr>
                                        </table>
                                        
                                        <table class="table table-bordered">
                                          <tr>
                                            <th style="text-align: center; width: 20%;">LAPORAN PELAKSANAAN/HAMBATAN/KEMAJUAN/DLL</th>
                                          </tr>
                                          <tr>
                                            <td>{{$data->laporan_pelaksanaan}}</td>
                                          </tr>
                                          <tr>
                                            <th style="text-align: center; width: 20%;">MATERIAL YANG DIPAKAI (NAMA/UKURAN/SATUAN/JUMLAH/KODE)</th>
                                          </tr>
                                          <tr>
                                            <td>{{$data->ket_material}}</td>
                                          </tr>
                                        </table>

                                        <table class="table table-bordered">
                                          <tr>
                                            <th style="text-align: center; width: 25%;">PELAKSANA<br><br><br><br><br><br><u>........................................</u></th>
                                            <th style="text-align: center; width: 25%;">KEPALA BENGKEL<br><br><br><br><br><br><u>........................................</u></th>
                                            <th style="text-align: center; width: 25%;">KABIRO HARKAN<br><br><br><br><br><br><u>DWI JOGO SOESILO</u></th>
                                            <th style="text-align: center; width: 25%;">DISETUJUI,<br>MANAGER DUK. PRODUKSI<br><br><br><br><br><u>UNGGUL WIDODO</u></th>
                                          </tr>
                                        </table>
    </div>
    @endforeach

  </body>
</html>