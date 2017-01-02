@extends('NiceAdmin.mastermember')
@section('title', 'Posting Artikel')
@section('logout', 'keluarjas')
@section('admin','jasadmin')
@section('profile','#')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <form action="/jasadmin/createposting" method="post" class="form form-horizontal" enctype="multipart/form-data">
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