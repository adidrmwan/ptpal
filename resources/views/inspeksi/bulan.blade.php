@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 login-box"><br><br>
                    <div class="panel panel-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title">
                                {{-- Original Logo will be placed here  --}}
                                <span class="logo-icon"><i><img src="{{ URL::asset('dist/images/logo.png') }}" width="50"></i> </span>Pilih Waktu Inspeksi
                            </h2>
                        </div>
                        <div class="panel-body">
                            {{-- <hr class="center-block small text-hr"> --}}
                            <br>
                            <button type="submit" class="btn btn-primary btn-border btn-block btn-lg">
                                Per 1 Bulan
                            </button>
                            <br>
                            <button type="submit" class="btn btn-primary btn-border btn-block btn-lg">
                                Per 3 Bulan
                            </button>
                            <br>
                            <button type="submit" class="btn btn-primary btn-border btn-block btn-lg">
                                Per 6 Bulan
                            </button>
                            <br>
                            <button type="submit" class="btn btn-primary btn-border btn-block btn-lg">
                                Per 1 Tahun
                            </button>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                    <hr class="center-block small text-hr">
                </div>
            </div>
        </div>
    </div>
@endsection