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
                                            <td>{{$mas->namam}}</td>
                                            <td>{{$mas->kabkot}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-success" href="/adminsampah/table/{{$mas->id}}/editmas"><i class="icon_clipboard"></i></a>
                                                    <a class="btn btn-danger" data-toggle="modal" href="#hapusRow"><i class="icon_close_alt2"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="hapusRow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin untuk menghapus dari daftar member? !!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-primary" type="button">Close</button>
                                                        <a href="/adminsampah/table/deletemas/{{$mas->id}}" class="btn btn-default" type="button">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <td>{{$jas->namaj}}</td>
                                            <td>{{$jas->kabkot}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-success" href="#"><i class="icon_clipboard"></i></a>
                                                    <a class="btn btn-danger" data-toggle="modal" href="#hapusRow2"><i class="icon_close_alt2"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="hapusRow2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin untuk menghapus dari daftar member? !!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-primary" type="button">Close</button>
                                                        <a href="/adminsampah/table/deletejas/{{$mas->id}}" class="btn btn-default" type="button">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                <td>{{$peng->namap}}</td>
                                                <td>{{$peng->kabkot}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-success" href="#"><i class="icon_clipboard"></i></a>
                                                        <a class="btn btn-danger" data-toggle="modal" href="#hapusRow3"><i class="icon_close_alt2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="hapusRow3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin untuk menghapus dari daftar member? !!
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button data-dismiss="modal" class="btn btn-primary" type="button">Close</button>
                                                            <a href="/adminsampah/table/deletepeng/{{$mas->id}}" class="btn btn-default" type="button">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
