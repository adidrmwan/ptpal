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
                @include('sweet::alert')
                <div style="padding:15px 0; ">
                    <form role="form" method="POST" action="{{ route('petugas.apd.submit') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox" value="check"  /> Apakah sudah memakai APD ?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-9">
                                <button type="submit" class="btn btn-primary" name="email_submit" value="submit"  onclick="if(!this.form.checkbox.checked){sweetAlert('', 'You must agree with the terms and conditions');return false}">Submit</button>
                            </div>
                        </div>
                    </form> 

                </div>
            </div>
        </div>
    </div>
@endsection