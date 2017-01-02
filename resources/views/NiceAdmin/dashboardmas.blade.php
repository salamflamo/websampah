@extends('NiceAdmin.mastermember')
@section('title', 'Dashboard')
@section('logout', 'keluarmas')
@section('admin', 'masadmin')
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/masadmin">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-cloud-download"></i>
                    <div class="count">6.674</div>
                    <div class="title">Download</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="count">7.538</div>
                    <div class="title">Purchased</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count">4.362</div>
                    <div class="title">Order</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-cubes"></i>
                    <div class="count">1.426</div>
                    <div class="title">Stock</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
        </div><!--/.row-->
        <!-- project team & activity start -->
    </section>
    @endsection


@section('navbar')
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="/masadmin ">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/masadmin/menyampah" class="">
                            <i class="icon_document_alt"></i>
                            <span>Menyampah</span>
                        </a>
                    </li>
                    <li>
                        <a href="/masadmin/table" class="">
                            <i class="icon_table"></i>
                            <span>Tabel Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="/masadmin/transaksi">
                            <i class="icon_clipboard"></i>
                            <span>Tabel Transaksi</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
@endsection