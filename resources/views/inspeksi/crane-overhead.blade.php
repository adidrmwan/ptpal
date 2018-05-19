@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
                <h1 class="text-center title-1"> <b> Inspeksi </b> </h1>
                <h2 class="text-center title-1">
                   OVERHEAD CRANE <br>
                    PRE-OPERATIONAL INSPECTION CHECKLIST <br>
                    (CHECKLIST INSPEKSI HARIAN SEBELUM PENGGOPERASIAN CRANE)
                </h2>
                <div style="clear:both">
                    <hr>
                </div>
                <div class="col-xl-12">
                    <div class="white-box">
                        <div class="card card-dark card-elements">
                            <div id="collapse1" class="panel-collapse collapse show">
                            <div class="card-body">
                                <form role="form" action="{{ route('crane.overhead.submit') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-sm-6" style="padding: 15px 10px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <label class="col-form-label" for="formGroupExampleInput">Nama Mesin</label><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-control" id="inlineFormCustomSelectPref" name="nama_mesin" required="">
                                                        <option value="0" selected="true" disabled="true">Pilih Mesin</option>
                                                    @foreach ($mesin as $listmesin)
                                                        <option value="{{$listmesin->nama_mesin}}">{{$listmesin->nama_mesin}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="padding: 15px 10px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <label class="col-form-label" for="formGroupExampleInput">Bengkel</label><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-control" id="inlineFormCustomSelectPref" name="bengkel" required="">
                                                        <option value="0" selected="true" disabled="true">Pilih Bengkel</option>
                                                        @foreach ($mesin as $listmesin)
                                                        <option value="{{$listmesin->bengkel}}">{{$listmesin->bengkel}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="padding: 15px 10px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <label class="col-form-label" for="formGroupExampleInput">SHIFT/HOUR</label><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-control" id="inlineFormCustomSelectPref" name="shift_hour" required="">
                                                        <option value="0" selected="true" disabled="true">Pilih Shift/Hour</option>
                                                        <option value="1"> 1/07.00 - 09.00</option>
                                                        <option value="2"> 2/09.00 - 11.00</option>
                                                        <option value="3"> 3/11.00 - 13.00</option>
                                                        <option value="4"> 4/13.00 - 15.00</option>
                                                    </select>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="padding: 15px 10px;">
                                           
                                            <div class="row">
                                                <div class="col-sm-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Hari / Tanggal</label><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class='col-sm-6'>
                                                    <div class="form-group">
                                                        <div class='input-group date' id='datetimepicker1'>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                            <input type='date' class="form-control" name="tgl_inspeksi" />
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $(function () {
                                                        $('#datetimepicker1').datetimepicker();
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-bottom: 5px;">
                                            <div class="col-sm-12">
                                                    <div class="col-sm-4">
                                                         <label class="col-form-label" for="formGroupExampleInput">UNIT PERLENGKAPAN YANG DIPERIKSA</label>
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label" for="formGroupExampleInput">KONDISI</label>
                                                      </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label" for="formGroupExampleInput">KETERANGAN</label>
                                                     </div>

                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Saklar tombol tekan, saklar magnet, saklar pembatas gerak</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_1" required=""></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Kabel</label>
                                                </div>
                                                 <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_2">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_2">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_2" required=""></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Rem (Brake)</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_3">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_3">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_3" required=""></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Tali angkat beban ( utama dan tambahan ) </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_4">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_4">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_4" required=""></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput"> Blok beban utama, tambahan</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_5">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_5">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_5" required=""></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Pancing utama, tambahan</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_6">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_6">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_6" required=""></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Puli penghantar</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_7">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_7">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_7" required=""></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Kerangka</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_8">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_8">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_8" required=""></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Kolektor</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_9">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_9">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_9" required=""></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Kabel Penghantar</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_10">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_10">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_10" required=""></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Girder</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_11">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_11">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_11" required=""></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Trolley</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_12">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_12">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_12" required=""></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Bogie</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_13">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_13">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_13" required=""></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Balok I ( I Beam )</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_14">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_14">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_14" required=""></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Hoist, trolley, girder, bogie, trunion, tali angkat, axle, dll</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_15>
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_15">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_15" required=""></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Area Kerja aman</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checklist_16">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="checklist_16">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_16" required=""></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>



                                        <div class="row" style="padding: 30px 0;">
                                            <div class="col-sm-12">
                                                 <div class="col-sm-12">
                                                    <label class="col-form-label" for="formGroupExampleInput">CATATAN TEMUAN/SARAN/KESIMPULAN</label>
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 200px; width: 670px;" name="catatan"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>



                                         <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>

                                <!-- end of form -->

                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection