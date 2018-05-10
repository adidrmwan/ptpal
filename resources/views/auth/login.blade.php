@extends('layouts.app')

@section('title', 'Masuk')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 login-box">
                    <div class="panel panel-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title">
                                {{-- Original Logo will be placed here  --}}
                                <span class="logo-icon"><i><img src="{{ URL::asset('dist/images/logo.png') }}" width="50"></i> </span> PT PAL <span>Indonesia</span>
                            </h2>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('login') }}">
                            
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Email:</label>
            
                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password:</label>

                                <div class="input-icon"><i class="icon-lock fa"></i>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Masuk
                            </button>
                           
                        </form>
                        </div>
                        <div class="panel-footer">
                            <div class="checkbox pull-left">
                                <label> <input type="checkbox" value="1" name="remember" id="remember"> Biarkan saya tetap masuk</label>
                            </div>
                            <p class="text-center pull-right"><a href="{{ route('password.request') }}"> Lupa password? </a></p>
                            <div style=" clear:both"></div>
                        </div>
                    </div>
                    <div class="login-box-btm text-center">
                        <p> Belum punya akun? <br><a href="/register"><strong>Daftar !</strong> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection