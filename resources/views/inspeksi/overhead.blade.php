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
                                <form>
                                    <div class="form-group">
                                        <div class="col-sm-6" style="padding: 15px 10px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <label class="col-form-label" for="formGroupExampleInput">Nama Mesin</label><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-control" id="inlineFormCustomSelectPref">
                                                        <option selected>Pilih Mesin</option>
                                                        <option value="1">Mesin 1</option>
                                                        <option value="2">Mesin 2</option>
                                                        <option value="3">Mesin 3</option>
                                                        <option value="4">Mesin 4</option>
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
                                                    <select class="form-control" id="inlineFormCustomSelectPref">
                                                        <option selected>Pilih Bengkel</option>
                                                        <option value="1">Bengkel 1</option>
                                                        <option value="2">Bengkel 2</option>
                                                        <option value="3">Bengkel 3</option>
                                                        <option value="4">Bengkel 4</option>
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
                                                    <select class="form-control" id="inlineFormCustomSelectPref">
                                                        <option selected>Pilih Shift/Hour</option>
                                                        <option value="1"> 1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
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
                                                            <input type='date' class="form-control" />
                                                            
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Baik
                                                    </label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                    
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Tidak Baik
                                                      </label>
                                                  </div>
                                                 <div class="col-sm-4">
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>



                                        <div class="row" style="padding: 30px 0;">
                                            <div class="col-sm-12">
                                                 <div class="col-sm-12">
                                                    <label class="col-form-label" for="formGroupExampleInput">CATATAN TEMUAN/SARAN/KESIMPULAN</label>
                                                    <div class="input-group">
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 200px; width: 670px;"></textarea>
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