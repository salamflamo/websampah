@extends('NiceAdmin.mastermember')
@section('title', 'Mengepul')
@section('logout', 'keluarmas')
@section('profile','/masadmin/profile')
@section('admin', 'masadmin')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i>Menyampah</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/masadmin">Home</a></li>
                        <li><i class="fa fa-table"></i>Forms</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if(isset($_GET['berhasil']))
                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <strong>Selesai</strong> Anda sudah menyampah hari ini, silahkan tunggu sampai sampah dibuang
                    </div>
                    @endif
                    <section class="panel">
                            <section class="panel-body">
                                <header class="panel-heading">
                                    Form Mengepul
                                </header>
                                <div class="panel-body">
                                    <form role="form" action="/masadmin/mengepul/{{$pengepul->id}}/kirim" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="berat">Berat Sampah</label>
                                            <input type="number" name="berat" class="form-control" id="berat" placeholder="Beratnya" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis">Jenis</label>
                                            <select class="form-control" name="jenis" id="jenis">
                                                <option value="Plastik">Plastik</option>
                                                <option value="Beling">Beling</option>
                                                <option value="Logam">Logam</option>
                                                <option value="Kertas">Kertas</option>
                                                <option value="Organik">Organik</option>
                                            </select>
                                        </div>
                                        {{csrf_field()}}
                                        <button type="submit" name="submit" value=2 class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </section>
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