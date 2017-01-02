<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'Tabel Transaksi')
@section('logout', 'keluarjas')
@section('admin', 'jasadmin')
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
                                            <th><i class="icon_cogs"></i> Aksi</th>
                                        </tr>
                                        @foreach($menyampah as $sampah)
                                        <tr>
                                            <td>{{$sampah->berat}}</td>
                                            <td>{{$sampah->daerah}}</td>
                                            <td>{{$sampah->status}}</td>
                                            <td>{{$sampah->created_at}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/jasadmin/transaksi/{{$sampah->id}}" onclick="return confirm('Anda yakin sudah lunas?');" class="btn btn-success"><i class="icon_star_alt"></i></a>
                                                </div>
                                            </td>
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
                    <a class="" href="/jasadmin ">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/jasadmin/transaksi">
                        <i class="icon_table"></i>
                        <span>Tabel Transaksi</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/jasadmin/mengepul">
                        <i class="icon_table"></i>
                        <span>Tabel Pengepul</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/jasadmin/posting">
                        <i class="icon_clipboard"></i>
                        <span>Posting Artikel</span>
                    </a>
                </li>
                <li>
                    <a href="/jasadmin/tableposting" class="">
                        <i class="icon_table"></i>
                        <span>Tabel Posting</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
@endsection