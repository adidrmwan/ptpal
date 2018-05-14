@extends('layouts.manager-app')

@section('title', 'Manager Dashboard')

@section('content')
    
    <div class="intro-inner">
        <div class="about-intro" style="background:url(dist/images/bg2.jpg) no-repeat center; background-size:cover;">
            <div class="dtable hw100">
                <div class="dtable-cell hw100">
                    <div class="container text-center">
                        <h1 class="intro-title animated fadeInDown"> Sistem Informasi PT PAL INDONESIA (PERSERO) </h1>
                    </div>
                </div>
            </div>
        </div>
        <!--/.about-intro -->
    </div>
    <!-- /.intro-inner -->

    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    <h1 class="text-center title-1"> PT PAL Indonesia (PERSERO) </h1>
                    <hr class="center-block small text-hr">
                    <div class="col-sm-6">
                        <div class="text-content has-lead-para text-left">
                            <p class="lead"> PT PAL Indonesia (PERSERO) adalah .... </p>
                        </div>
                    </div>
<!--                     <div class="col-sm-6"><img src="dist/images/info.png" alt="imfo" class="img-responsive">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->
    <h3>Manajer Dashboard</h3>
    <div class="parallaxbox about-parallax-bottom">
        <div class="container">
            <div class="row text-center featuredbox">
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class="icon-book-open ln-shadow-box shape-3"></i></div>
                        <h3 class="title-4">Crane</h3>
                        <p>Keterangan</p>
                    </div>
                </div>
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class=" icon-lightbulb ln-shadow-box shape-6"></i></div>
                        <h3 class="title-4">Forklift</h3>
                        <p>Keterangan</p>
                    </div>
                </div>
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class="icon-megaphone ln-shadow-box shape-5"></i></div>
                        <h3 class="title-4">Dan Lain-lain</h3>
                        <p>Keterangan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection