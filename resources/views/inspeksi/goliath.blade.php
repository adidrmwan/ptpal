@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
                <h1 class="text-center title-1"> <b> Inspeksi </b> </h1>
                <h2 class="text-center title-1">
                    GOLIATH 300 TON GANTRY CRANE <br>
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
                                                     <label class="col-form-label" for="formGroupExampleInput">Tagged crane and hoist</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_1"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Control Devices</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_2"></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Brakes</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_3"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Hook dan hook latch</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_4"></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Rail long travel dan rail cross travel</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_5"></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Wire rope</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_6"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Load Chain</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_7"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Reeving</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_8"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Limit Switches</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_9"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Pelumasan bearing, wires, gear reducers hydraulic units, dll</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_10"></textarea>
                                                    </div>
                                                 </div>                                              
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Fuctional switch, controller, alarm, signal indicator, voltage</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_11"></textarea>
                                                    </div>
                                                 </div>                                               
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Rigging</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_12"></textarea>
                                                    </div>
                                                 </div>                                             
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 15px 0;">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4">
                                                     <label class="col-form-label" for="formGroupExampleInput">Crane Tracks</label>
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
                                                      <textarea class="form-control" aria-label="With textarea" style="resize: none; height: 100px; width: 300px;" name="ket_13"></textarea>
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