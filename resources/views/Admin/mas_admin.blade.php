@extends('Admin.admin')
@section('title','Halaman Masyarakat');
@section('link', '/masadmin');
@section('logout','/masadmin/keluar')
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
                        <a href="/masadmin/table" >
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Transaksi Sampah</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="/masadmin/sunting" >
                            <i class="fa fa-gear fa-5x"></i>
                            <h4>Sunting Profil</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="/masadmin/pesan" >
                            <i class="fa fa-wechat fa-5x"></i>
                            <h4>Pesan Jasa</h4>
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
