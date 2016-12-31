<!DOCTYPE html>
@extends('NiceAdmin.master')
@section('title','Tables')
@section('tables')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-table"></i>Tables</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <section class="panel">
                    <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#masyarakat">Masyarakat</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#jasa">Jasa</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#pengepul">Pengepul</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="masyarakat" class="tab-pane active">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Tabel Masyarakat
                                    </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_profile"></i> Full Name</th>
                                            <th><i class="icon_pin_alt"></i> City</th>
                                            <th><i class="icon_cogs"></i> Action</th>
                                        </tr>
                                        @foreach($masyarakat as $mas)
                                        <tr>
                                            <td>{{$mas->nama}}</td>
                                            <td>{{$mas->kabkot}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                                </div>
                                            </td>
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
                            <div id="jasa" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Tabel Jasa
                                    </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_profile"></i> Full Name</th>
                                            <th><i class="icon_pin_alt"></i> City</th>
                                            <th><i class="icon_cogs"></i> Action</th>
                                        </tr>
                                        @foreach($jasa as $jas)
                                        <tr>
                                            <td>{{$jas->nama}}</td>
                                            <td>{{$jas->kabkot}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary" href="#"><i class="icon_book_alt"></i></a>
                                                    <a class="btn btn-success" href="#"><i class="icon_clipboard"></i></a>
                                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                                </div>
                                            </td>
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
                            <div id="pengepul" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Tabel Jasa
                                    </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                        <tr>
                                            <th><i class="icon_profile"></i> Full Name</th>
                                            <th><i class="icon_pin_alt"></i> City</th>
                                            <th><i class="icon_cogs"></i> Action</th>
                                        </tr>
                                        @foreach($pengepul as $peng)
                                            <tr>
                                                <td>{{$peng->nama}}</td>
                                                <td>{{$peng->kabkot}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary" href="#"><i class="icon_book_alt"></i></a>
                                                        <a class="btn btn-success" href="#"><i class="icon_clipboard"></i></a>
                                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                                    </div>
                                                </td>
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
