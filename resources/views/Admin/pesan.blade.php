@extends('Admin.admin')
@section('title','Halaman Masyarakat');
@section('link', '/masadmin');
@section('logout','/keluar')
@section('dashboard')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Pesan Jasa</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Welcome <b>{{$mass->nama}}</b> ! </strong>
                    </div>
                </div>
            </div>
            <div class="row pad-top">
                <div class="col-md-12 mail-grids">
                    <form action="/masadmin/kirim" method="post">
                        <input type="number" name="berat" placeholder="Berat Sampah" required><br>
                        <input type="text" name="daerah" placeholder="Daerah" required><br>
                        <input type="submit" name="submit" value="Pesan">
                        <a href="/masadmin" style="text-decoration: none; border: #39ff3b; padding: 5px 5px">Cancel</a><br>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
