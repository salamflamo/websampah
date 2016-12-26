@extends('Admin.admin')
@section('title','Halaman Masyarakat');
@section('link', '/masadmin');
@section('logout','/keluar')
@section('dashboard')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
             <h2>Tabel Transaksi Sampah</h2>
            </div>
        </div>
         <!-- /. ROW  -->
          <hr />
        <div class="row">

        </div>
        <div class="row text-center pad-top">
            <table class="table-bordered table">
                <tr>
                    <td>Berat</td>
                    <td>Daerah</td>
                    <td>Status</td>
                    <td>Waktu</td>
                </tr>
                @foreach($trans as $transs)
                    <tr>
                        <td>{{$transs->berat}} Kg</td>
                        <td>{{$transs->daerah}}</td>
                        <td>{{$transs->status}} diambil</td>
                        <td>{{$transs->created_at}}</td>
                    </tr>
                @endforeach
            </table>


        </div>

    </div>
 <!-- /. PAGE WRAPPER  -->
</div>
@endsection
