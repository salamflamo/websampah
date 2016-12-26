@extends('Admin.admin')
@section('dashboard')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Edit Masyarakat</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">

            </div>
            <div class="row pad-top">
                <div class="col-md-12 mail-grids">
                    <form action="/adminsampah/masyarakat/{{$mas->id}}" method="post">
                        <input type="text" name="nama" value="{{$mas->nama}}"><br>
                        <input type="text" name="email" value="{{$mas->email}}"><br>
                        <input type="text" name="password" value="{{$mas->password}}"><br>
                        <input type="text" name="nope" value="{{$mas->nope}}"><br>
                        <textarea type="text" name="alamat" >{{$mas->alamat}}</textarea><br>
                        <input type="text" name="kabkot" value="{{$mas->kabkot}}"><br>
                        <input type="text" name="foto" value="{{$mas->foto}}"><br>
                        <input type="submit" name="submit" value="edit">
                        <a href="/adminsampah/masyarakat" style="text-decoration: none; border: #39ff3b; padding: 20px 15px">Cancel</a><br>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                </div>
            </div>

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
