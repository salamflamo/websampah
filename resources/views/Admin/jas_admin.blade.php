@extends('Admin.admin')
@section('title','Halaman Jasa');
@section('link', '/jasadmin');
@section('logout','/jasadmin/keluar')
@section('dashboard')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>@yield('title')</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <!-- /. ROW  -->
            <div class="row text-center pad-top">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="/jasadmin/table" >
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Transaksi Sampah</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="/jasadmin/artikel" >
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Buat Artikel / Berita</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="/jasadmin/sunting" >
                            <i class="fa fa-gear fa-5x"></i>
                            <h4>Sunting Profil</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
