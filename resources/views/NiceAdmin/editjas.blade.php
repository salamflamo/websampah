@extends('NiceAdmin.master')
@section('title', 'Edit Data Masyarakat')
@section('form')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i>Forms</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-table"></i>Forms</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Form Edit Masyarakat
                        </header>
                        <div class="panel-body">
                            <form role="form" action="/adminsampah/editjas/{{$jasa->id}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{$jasa->namaj}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$jasa->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                                </div>
                                <div class="form-group">
                                    <label for="nope">No HP</label>
                                    <input type="text" name="nope" class="form-control" id="nope" placeholder="No HP " value="{{$jasa->nope}}" >
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" >{{$jasa->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kabkot">Kab. / Kota</label>
                                    <input type="text" name="kabkot" class="form-control" id="kabkot" placeholder="Kab. / Kota " value="{{$jasa->kabkot}}">
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
        </section>
    </section>
@endsection