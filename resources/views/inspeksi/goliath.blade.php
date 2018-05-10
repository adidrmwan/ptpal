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
                                              <div class="col-md-6">
                                                <input class="form-control" type="datetime-local" value="2018-05-10" id="example-datetime-local-input">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <label class="col-form-label" for="formGroupExampleInput">Bersihkan sepanjang railway pierleg & sheirleg dari debu, karat dan lumpur.</label><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select class="form-control" id="inlineFormCustomSelectPref">
                                                    <option selected>Pilih Keterangan</option>
                                                    <option value="1">Baik</option>
                                                    <option value="2">Tidak Normal</option>
                                                    <option value="3">Sangat Mendesak</option>
                                                    <option value="4">Perlu Reparasi</option>
                                                </select>
                                            </div>
                                            <div class="col-md-10"></div>                                    
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection