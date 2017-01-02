<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'My Profile')
@section('logout', 'keluarmas')
@section('admin', 'masadmin')
@section('profile','/masadmin/profile')
@section('content')
    <div id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading tab-bg-info">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#profile">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#edit-profile">
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <!-- profile -->
                                <div id="profile" class="tab-pane active">
                                    <section class="panel">
                                        <div class="bio-graph-heading">
                                            <img src="/images/{{$nama->foto}}" style="width: 20%;height: 20%; border-radius: 100%">
                                        </div>
                                        <div class="panel-body bio-graph-info">
                                            <h1>Bio Graph</h1>
                                            <div class="row">
                                                <div class="bio-row">
                                                    <p><span>Nama </span>: {{$nama->namam}} </p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Email </span>: {{$nama->email}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>No HP</span>: {{$nama->nope}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Alamat </span>: {{$nama->alamat}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Kab. / Kota </span>: {{$nama->kabkot}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                        </div>
                                    </section>
                                </div>
                                <!-- edit-profile -->
                                <div id="edit-profile" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1> Edit Profile</h1>
                                            <form role="form" action="/masadmin/sunting/{{$nama->id}}" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{$nama->namam}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$nama->email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="nope">No HP</label>
                                                    <input type="text" name="nope" class="form-control" id="nope" placeholder="No HP " value="{{$nama->nope}}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" >{{$nama->alamat}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabkot">Kab. / Kota</label>
                                                    <input type="text" name="kabkot" class="form-control" id="kabkot" placeholder="Kab. / Kota " value="{{$nama->kabkot}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Foto Asli</label>
                                                    <input type="file" name="image" id="foto" accept="image/*">
                                                    <p class="help-block">Foto Asli</p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" required> Setuju Menyimpan
                                                    </label>
                                                </div>
                                                {{csrf_field()}}
                                                <button type="submit" name="submit" value=2 class="btn btn-primary">Submit</button>
                                                <a href="/adminsampah/table"  class="btn btn-default">Cancel</a>
                                                <input type="hidden" name="_method" value="PUT">
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
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