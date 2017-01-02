<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'Daftar Pengepul')
@section('logout', 'keluarjas')
@section('admin','jasadmin')
@section('profile','#')
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
                                        Tabel Daftar Pengepul
                                    </header>
                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_profile"></i>Nama</th>
                                            <th><i class="icon_map_alt"></i> Daerah</th>
                                            <th><i class="icon_phone"></i> No HP</th>
                                            <th><i class="icon_mail_alt"></i> Email</th>
                                        </tr>
                                        @foreach($pengepul as $kepul)
                                        <tr>
                                            <td><a href="/jasadmin/mengepul/{{$kepul->id}}">{{$kepul->namap}}</a> </td>
                                            <td>{{$kepul->kabkot}}</td>
                                            <td>{{$kepul->nope}}</td>
                                            <td>{{$kepul->email}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                {{$pengepul->links()}}
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