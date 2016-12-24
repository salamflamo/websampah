@extends('Admin.admin')
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
            <div class="row pad-top">
                <div class="col-md-12 mail-grids">
                    <form action="/adminsampah/table/{{$jasa->id}}" method="post">
                        <input type="text" name="nama" value="{{$jasa->nama}}"><br>
                        <input type="text" name="email" value="{{$jasa->email}}"><br>
                        <input type="text" name="password" value="{{$jasa->password}}"><br>
                        <input type="text" name="nope" value="{{$jasa->nope}}"><br>
                        <textarea type="text" name="alamat" >{{$jasa->alamat}}</textarea><br>
                        <input type="text" name="kabkot" value="{{$jasa->kabkot}}"><br>
                        <input type="text" name="foto" value="{{$jasa->foto}}"><br>
                        <input type="submit" name="submit" value="edit">
                        <a href="/adminsampah/table" style="text-decoration: none; border: #39ff3b; padding: 20px 15px">Cancel</a><br>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                </div>
            </div>

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
