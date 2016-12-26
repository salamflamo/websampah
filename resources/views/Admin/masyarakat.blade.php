@extends('Admin.admin')
@section('title','Halaman Admin');
@section('link', '/adminsampah');
@section('logout','/forgets')
@section('dashboard')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tabel Masyarakat</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.
                    </div>
                </div>
            </div>
            <div class="row text-center pad-top">
                <table class="table-bordered table">
                    <tr>
                        <td>Id</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No HP</td>
                        <td>Alamat</td>
                        <td>Kab. / Kota</td>
                        <td>Foto</td>
                        <td>Waktu Daftar</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                    @foreach($mas as $mass)
                        <tr>
                            <td>{{$mass->id}}</td>
                            <td>{{$mass->nama}}</td>
                            <td>{{$mass->email}}</td>
                            <td>{{$mass->nope}}</td>
                            <td>{{$mass->alamat}}</td>
                            <td>{{$mass->kabkot}}</td>
                            <td>{{$mass->foto}}</td>
                            <td>{{$mass->created_at}}</td>
                            <td><a href="/adminsampah/masyarakat/{{$mass->id}}/edit">Edit</a> </td>
                            <td><a href="/adminsampah/masyarakat/{{$mass->id}}">Hapus</a> </td>
                        </tr>
                    @endforeach
                </table>


            </div>

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
