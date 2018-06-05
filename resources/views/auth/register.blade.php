@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Buat Akun Baru </h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('register')}}">
                                     {{-- Text input --}}

                                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nama</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control input-md" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('divisi') ? ' has-error' : '' }}">
                                        <label for="divisi" class="col-md-4 control-label">Divisi</label>

                                        <div class="col-md-6">
                                            <input id="divisi" type="text" class="form-control input-md" name="divisi" value="{{ old('divisi') }}" required autofocus>

                                            @if ($errors->has('divisi'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('divisi') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control input-md" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control input-md" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control input-md" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Daftar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection