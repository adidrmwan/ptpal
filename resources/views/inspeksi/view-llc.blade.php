@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')

    <div class="main-container inner-page">
        @foreach ($crane as $data)
        <div class="container">
            <div class="row clearfix">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="{{action('PdfGenerateController@pdfviewLLC', $data->id_inspeksi)}}" class="btn btn-primary">Download as PDF</a>
                        <a href="{{ route('petugas.home') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                    <div class="col-xs-4">
                        
                    </div>
                     <div style="clear:both">
                    <hr>
                </div>
                </div>
                
                
                <div class="col-xl-12">
                    <div class="white-box">
                        <div class="card card-dark card-elements">
                            <div id="collapse1" class="panel-collapse collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr style="text-align: center;">
                                                <th colspan="6" style="text-align: center;">
                                                LLC CRANE <br>
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
                                                <td>Hook</td>
                                                @if($data->checklist_4 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_4}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">5</td>
                                                <td>Lintasan Rel dan Kabel Rel</td>
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
                                                <td>Tegangan Kabel power</td>
                                                @if($data->checklist_7 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_5}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 2%;">8</td>
                                                <td>Function limit anticollition</td>
                                                @if($data->checklist_8 == 1)
                                                    <td style="text-align: center;">Baik</td>
                                                @else
                                                    <td style="text-align: center;">Tidak Baik</td>
                                                @endif
                                                <td>{{$data->ket_8}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">9</td>
                                              <td>Motor dan gearbox travel</td>
                                              @if($data->checklist_9 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_9}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">10</td>
                                              <td>Functional</td>
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
                                              <td>Boom</td>
                                              @if($data->checklist_12 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_12}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">13</td>
                                              <td>Fungsi Gerakan</td>
                                              @if($data->checklist_13 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_13}}</td>
                                            </tr>
                                            <tr>
                                              <td style="width: 2%;">14</td>
                                              <td>Pelumasan Pedestal Gear</td>
                                              @if($data->checklist_14 == 1)
                                                <td style="text-align: center;">Baik</td>
                                              @else
                                                <td style="text-align: center;">Tidak Baik</td>
                                              @endif
                                              <td>{{$data->ket_14}}</td>
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