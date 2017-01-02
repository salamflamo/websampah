<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'Tabel Menyampah')
@section('logout', 'keluarmas')
@section('admin', 'masadmin')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{url('/masadmin')}}">Home</a></li>
                    <li><i class="fa fa-table"></i>Tables</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <section class="panel">
                    <div class="panel-body">
                        <div class="tab-content">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Tabel Menyampah
                                    </header>
                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_box-selected"></i>Berat</th>
                                            <th><i class="icon_pin_alt"></i> Daerah</th>
                                            <th><i class="icon_cogs"></i> Status</th>
                                            <th><i class="icon_cogs"></i> Waktu</th>
                                        </tr>
                                        @foreach($menyampah as $sampah)
                                        <tr>
                                            <td>{{$sampah->berat}}</td>
                                            <td>{{$sampah->daerah}}</td>
                                            <td>{{$sampah->status}}</td>
                                            <td>{{$sampah->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                {{$menyampah->links()}}
                                            </div>
                                        </div>
                                    </section>
                                </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <section class="panel">
                    <div class="panel-body">
                        <div class="tab-content">
                            <section class="panel">
                                <header class="panel-heading">
                                    Tabel Mengepul
                                </header>
                                <table class="table table-striped table-advance table-hover">
                                    <tbody>
                                    <tr>
                                        <th><i class="icon_box-selected"></i>Berat</th>
                                        <th><i class="icon_box-selected"></i>Jenis</th>
                                        <th><i class="icon_pin_alt"></i> Daerah</th>
                                        <th><i class="icon_cogs"></i> Status</th>
                                        <th><i class="icon_cogs"></i> Waktu</th>
                                    </tr>
                                    @foreach($mengepul as $kepul)
                                        <tr>
                                            <td>{{$kepul->berat}}</td>
                                            <td>{{$kepul->jenis}}</td>
                                            <td>{{$kepul->kabkot}}</td>
                                            <td>{{$kepul->status}}</td>
                                            <td>{{$kepul->created_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="text-center">
                                            {{$mengepul->links()}}
                                        </div>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
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
                    <a class="" href="/masadmin/mengepul">
                        <i class="icon_clipboard"></i>
                        <span>Mengepul</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
@endsection