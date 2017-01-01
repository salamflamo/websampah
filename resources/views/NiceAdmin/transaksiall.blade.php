<!DOCTYPE html>
@extends('NiceAdmin.master')
@section('title','Transaksi')
@section('tables')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/adminsampah">Home</a></li>
                    <li><i class="fa fa-table"></i>Tables</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-hand-o-up"></i>
                    <div class="count">{{$member}}</div>
                    <div class="title">Member</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-trash-o"></i>
                    <div class="count">{{$jummenyampah}}</div>
                    <div class="title">Menyampah</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-truck"></i>
                    <div class="count">{{$jummengepul}}</div>
                    <div class="title">Mengepul</div>
                </div><!--/.info-box-->
            </div><!--/.col-->
        </div>
        <div class="row">
            <div class="col-lg-8">
                <section class="panel">
                    <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#menyampah">Menyampah</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#mengepul">Mengepul</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="menyampah" class="tab-pane active">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Tabel Jasa
                                    </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_profile"></i> Berat</th>
                                            <th><i class="icon_pin_alt"></i> Daerah</th>
                                            <th><i class="icon_profile"></i> Penyewa</th>
                                            <th><i class="icon_profile"></i> Pengambil</th>
                                            <th><i class="icon_clock_alt"></i> Waktu</th>
                                        </tr>
                                        @foreach($menyampah as $sampah)
                                        <tr>
                                            <td>{{$sampah->berat}} Kg</td>
                                            <td>{{$sampah->daerah}}</td>
                                            <td>{{$sampah->namam}}</td>
                                            <td>{{$sampah->namaj}}</td>
                                            <td>{{$sampah->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    <li><a href="#">«</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </div>
                            <div id="mengepul" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Tabel Jasa
                                    </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_profile"></i> Jenis Sampah</th>
                                            <th><i class="icon_box-selected"></i> Berat</th>
                                            <th><i class="icon_profile"></i> Pemesan</th>
                                            <th><i class="icon_profile"></i> Pengepul</th>
                                            <th><i class="icon_cogs"></i> Status</th>
                                            <th><i class="icon_clock_alt"></i> Waktu</th>
                                        </tr>
                                        @foreach($mengepul as $peng)
                                            <tr>
                                                <td>{{$peng->jenis}}</td>
                                                <td>{{$peng->berat}} Kg</td>
                                                <td>{{$peng->oleh}}</td>
                                                <td>{{$peng->namap}}</td>
                                                <td>{{$peng->status}}</td>
                                                <td>{{$peng->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    <li><a href="#">«</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection
