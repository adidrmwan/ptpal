@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
                <h1 class="text-center title-1"> SOP </h1><br>
                <div style="clear:both">
                    <hr>
                </div>
                <div class="col-xl-12">
                    <div class="white-box text-center" style="min-height: 400px">
                        <p>SOPnya Apa Aja???</p>
                    </div>
                </div>

                <div style="padding:15px 0; ">
                    <form>
                      <div class="form-group">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" style="font-size: 18px; padding: 10px 0;">   Saya sudah memakai APD dengan benar</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Lanjut</button>
                    </form>    
                </div>

            </div>
            <hr class="mx-auto small text-hr">
        </div>
    </div>
@endsection