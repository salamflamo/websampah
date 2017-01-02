@extends('NiceAdmin.masterlogin')
@section('title', 'Login Jasa')
@section('content')
  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" method="post" action="/verifjas">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <span class="pull-right"> <a href="/daftarjadijasa">Daftar Jadi Member</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
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