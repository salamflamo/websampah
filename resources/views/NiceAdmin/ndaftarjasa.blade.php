@extends('NiceAdmin.masterlogin')
@section('title', 'Ndaftar Jasa')
@section('content')
  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" method="post" action="/daftarkan" enctype="multipart/form-data">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_book"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" name="nama" class="form-control" placeholder="Nama" autofocus>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_mail_alt"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_phone"></i></span>
                <input type="text" name="nope" class="form-control" placeholder="No HP" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_book_alt"></i></span>
                <textarea name="alamat" class="form-control" placeholder="Alamat Sekarang"></textarea>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_box-empty"></i></span>
                <input type="text" name="kabkot" class="form-control" placeholder="Kab. / Kota" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_film"></i></span>
                <input type="file" name="foto" class="form-control" placeholder="Foto Asli" accept="image/*" autofocus>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
            {{csrf_field()}}
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>
  </body>
</html>
@endsection