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
                    <form role="form" method="POST" action="{{ route('petugas.apd.submit') }}">
                        {{ csrf_field() }}
                        <input type="checkbox" name="checkbox" value="check"  />
                        <input type="submit" name="email_submit" value="submit" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"  />
                    </form> 


                </div>

            </div>
            <hr class="mx-auto small text-hr">
        </div>
    </div>
@endsection