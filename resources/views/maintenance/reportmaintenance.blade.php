@extends('layouts.manager-app')

@section('title', 'Selamat Datang')

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
                    <h1 class="text-center title-1"> REPORT MAINTENANCE </h1>
                    <hr class="center-block small text-hr">
                    <div class="col-sm-12">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Mesin</th>
                              <th scope="col">Petugas</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">History Maintenance</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              <th scope="row">1</th>
                              <td> Bla bla</td>
                              <td> adi</td>
                              <td> 17 nopember 1996</td>
                              <td>
                                <a href=""><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;</span>Show</button></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->
@endsection