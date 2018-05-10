@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
                <h1 class="text-center title-1"> Inspeksi </h1>
                <div style="clear:both">
                    <hr>
                </div>
                <div class="col-xl-12">
                    <div class="white-box">
                        <div class="card card-dark card-elements">
                            <div class="card-header">
                                <h4 style="color: blue">Mekanik</h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse show">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <label class="col-form-label" for="formGroupExampleInput">Bersihkan bagian bogie dan equalizer dari debu, lumpuran karat.</label><br>
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