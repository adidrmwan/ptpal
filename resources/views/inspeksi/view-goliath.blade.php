@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')

    <div class="main-container inner-page">
        @foreach ($crane as $data)
        <div class="container">
            <div class="row clearfix">
                <h1 class="text-center title-1"> <b> Inspeksi </b> </h1>

                <a href="{{action('PdfGenerateController@pdfviewGoliath', $data->id_inspeksi)}}">Download PDF</a>
                
                <div class="col-xl-12">
                    <div class="white-box">
                        <div class="card card-dark card-elements">
                            <div id="collapse1" class="panel-collapse collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr style="text-align: center;">
                                                <th colspan="3" style="text-align: center;">
                                                GOLIATH 300 TON GANTRY CRANE <br>
                                                PRE-OPERATIONAL INSPECTION CHECKLIST <br>
                                                (CHECKLIST INSPEKSI HARIAN SEBELUM PENGGOPERASIAN CRANE)
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <td><strong>Nama Mesin : </strong>{{$data->nama_mesin}}</td>
                                                <td><strong>Bengkel : </strong>{{$data->bengkel}}</td>
                                                <td><strong>Departemen : </strong>{{$data->department}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kode Mesin : </strong>{{$data->kode_mesin}}</td>
                                                <td><strong>Hari/Tanggal : </strong>{{$data->tgl_inspeksi}}</td>
                                                <td><strong>Divisi : </strong>{{$data->divisi}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Shift/Hour : </strong>{{$data->shift_hour}}</td>
                                                <td colspan="2"><strong>Operator/Petugas : </strong>{{$data->name}}</td>
                                            </tr>
                                        </table>

                                        <table class="table table-bordered">
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
                                                    <td style="text-align: center;"><button type="button" class="btn btn-success">Success</button>Baik</td>
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
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection