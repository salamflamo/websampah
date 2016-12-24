@extends('Admin.admin')
@section('dashboard')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Registrasi Jasa</h2>
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
                    <form action="/adminsampah/create" method="post">
                        <input type="text" name="nama" placeholder="nama" required><br>
                        <input type="text" name="email" placeholder="email" required><br>
                        <input type="password" name="password" placeholder="password" required><br>
                        <input type="text" name="nope" placeholder="No hp" required><br>
                        <textarea type="text" name="alamat" placeholder="Alamat" required></textarea><br>
                        <input type="text" name="kabkot" placeholder="Kab. / Kota" required><br>
                        <input type="text" name="foto" placeholder="file foto" required><br>
                        <input type="submit" name="submit" value="Regis">
                        <a href="/adminsampah/table" style="text-decoration: none; border: #39ff3b; padding: 20px 15px">Cancel</a><br>
                        {{ csrf_field() }}

                    </form>
                </div>
            </div>

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
