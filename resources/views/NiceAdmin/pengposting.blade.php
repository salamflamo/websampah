<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'Posting')
@section('admin', 'pengadmin')
@section('logout', 'keluarpeng')
@section('profile','#')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <form action="/pengadmin/createposting" method="post" class="form form-horizontal" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Postingan Baru
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="judul">Judul</label>
                                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <input type="file" name="image" accept="image/*" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                           <textarea class="form-control ckeditor" name="artikel" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <button type="submit" name="submit" class="btn btn-primary">Posting</button>
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
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