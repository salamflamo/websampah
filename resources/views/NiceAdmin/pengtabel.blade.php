<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'Mengepul')
@section('logout', 'keluarpeng')
@section('profile','#')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{url('/pengadmin')}}">Home</a></li>
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
                                    Tabel Mengepul
                                </header>
                                <table class="table table-striped table-advance table-hover">
                                    <tbody>
                                    <tr>
                                        <th><i class="icon_box-selected"></i>Berat</th>
                                        <th><i class="icon_box-selected"></i>Jenis</th>
                                        <th><i class="icon_profile"></i> Nama</th>
                                        <th><i class="icon_cogs"></i> Status</th>
                                        <th><i class="icon_clock_alt"></i> Waktu</th>
                                        <th><i class="icon_box-checked"></i> Aksi</th>
                                    </tr>
                                    @foreach($mengepul as $kepul)
                                        <tr>
                                            <td>{{$kepul->berat}}</td>
                                            <td>{{$kepul->jenis}}</td>
                                            <td>{{$kepul->oleh}}</td>
                                            <td>{{$kepul->status}}</td>
                                            <td>{{$kepul->created_at}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/pengadmin/mengepul/{{$kepul->id}}" onclick="return confirm('Anda yakin sudah lunas?');" class="btn btn-success"><i class="icon_star_alt"></i></a>
                                                </div>
                                            </td>
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
                    <a class="" href="/pengadmin ">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/pengadmin/mengepul" class="">
                        <i class="icon_archive_alt"></i>
                        <span>Mengepul</span>
                    </a>
                </li>
                <li>
                    <a href="/pengadmin/posting" class="">
                        <i class="icon_document"></i>
                        <span>Posting</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/pengadmin/tabelposting">
                        <i class="icon_table"></i>
                        <span>Tabel Posting</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
@endsection