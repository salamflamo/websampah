@extends('Admin.admin')
@section('title','Halaman Admin');
@section('link', '/adminsampah');
@section('logout','/forgets')
@section('dashboard')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
             <h2>Tabel Jasa</h2>
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
                @foreach($jasa as $jas)
                    <tr>
                        <td>{{$jas->id}}</td>
                        <td>{{$jas->nama}}</td>
                        <td>{{$jas->email}}</td>
                        <td>{{$jas->nope}}</td>
                        <td>{{$jas->alamat}}</td>
                        <td>{{$jas->kabkot}}</td>
                        <td>{{$jas->foto}}</td>
                        <td>{{$jas->created_at}}</td>
                        <td><a href="/adminsampah/table/{{$jas->id}}/edit">Edit</a> </td>
                        <td><a href="/adminsampah/table/{{$jas->id}}">Hapus</a> </td>
                    </tr>
                @endforeach
            </table>


        </div>

    </div>
 <!-- /. PAGE WRAPPER  -->
</div>
@endsection
