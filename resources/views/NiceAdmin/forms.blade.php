@extends('NiceAdmin.master')
@section('title', 'Input Member')
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
                                            Form Masyarakat
                                        </header>
                                        <div class="panel-body">
                                            <form role="form" action="/adminsampah/create" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nope">No HP</label>
                                                    <input type="text" name="nope" class="form-control" id="nope" placeholder="No HP " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabkot">Kab. / Kota</label>
                                                    <input type="text" name="kabkot" class="form-control" id="kabkot" placeholder="Kab. / Kota " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Foto Asli</label>
                                                    <input type="file" name="image" id="foto" accept="image/*">
                                                    <p class="help-block">Foto Asli</p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" required> Check me out
                                                    </label>
                                                </div>
                                                {{csrf_field()}}
                                                <button type="submit" name="submit" value=2 class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                                <div id="jasa" class="tab-pane">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Form Jasa
                                        </header>
                                        <div class="panel-body">
                                            <form role="form" action="/adminsampah/createjasa" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nope">No HP</label>
                                                    <input type="text" name="nope" class="form-control" id="nope" placeholder="No HP " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabkot">Kab. / Kota</label>
                                                    <input type="text" name="kabkot" class="form-control" id="kabkot" placeholder="Kab. / Kota " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Foto Asli</label>
                                                    <input type="file" name="image" id="foto" accept="image/*">
                                                    <p class="help-block">Foto Asli</p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" required> Check me out
                                                    </label>
                                                </div>
                                                {{csrf_field()}}
                                                <button type="submit" name="submit" value=1 class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                                <div id="pengepul" class="tab-pane">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Form Pengepul
                                        </header>
                                        <div class="panel-body">
                                            <form role="form" action="/adminsampah/createpengepul" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nope">No HP</label>
                                                    <input type="text" name="nope" class="form-control" id="nope" placeholder="No HP " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabkot">Kab. / Kota</label>
                                                    <input type="text" name="kabkot" class="form-control" id="kabkot" placeholder="Kab. / Kota " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Foto Asli</label>
                                                    <input type="file" name="image" id="foto" accept="image/*">
                                                    <p class="help-block">Foto Asli</p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" required> Check me out
                                                    </label>
                                                </div>
                                                {{csrf_field()}}
                                                <button type="submit" name="submit" value=3 class="btn btn-primary">Submit</button>
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
    </section>
@endsection