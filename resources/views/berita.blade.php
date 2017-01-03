<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Web Sampah | Solusi Buang Sampah Anda</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href={{URL::asset('vendor-sampah/css/bootstrap.css')}} rel="stylesheet" type="text/css" media="all" />
    <link href={{URL::asset('vendor-sampah/css/style.css')}} rel="stylesheet" type="text/css" media="all" />
    <link rel='stylesheet' type='text/css' href={{URL::asset('vendor-sampah/css/jquery.easy-gallery.css')}} />
    <!-- js -->
    <script type="text/javascript" src={{URL::asset('vendor-sampah/js/jquery-2.1.4.min.js')}}></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src={{URL::asset('vendor-sampah/js/move-top.js')}}></script>
    <script type="text/javascript" src={{URL::asset('vendor-sampah/js/easing.js')}}></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href={{URL::asset('vendor-sampah/css/login.css')}} rel="stylesheet" type="text/css">

</head>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">Halaman Berita <a class="btn btn-default" href="/">Home</a></div>
                </div>
            </div>
        </section>
    </div>
</div>
@foreach($posting as $post)
<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-primary"><h4 class="panel-heading">{{$post->judul}}</h4></div>
        <div class="panel-content">
            <img src="/imageartikel/{{$post->gambar}}" style="width: 20%;height: 20%">
            {{$post->artikel}}
            <br>
            {{$post->oleh}} &nbsp; {{$post->updated_at}}
        </div>
    </div>
</div>
    <br>
@endforeach
<section class="panel">
    <div class="panel-body">
        <div class="text-center">
            {{$posting->links()}}
        </div>
    </div>
</section>
<body>
<!-- banner -->
    <div class="container">
        <div class="header">
            <div class="logo">
                <h1><a href="/">Web Sampah<span>Buang Sampah Anda</span></a></h1>
                <h1></h1>
            </div>
            <div class="mail-phone">
                <ul>
                    <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>+62 89675657864</li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:sekretariat@doscom.org">sekretariat@doscom.org</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //banner -->
<!-- about -->

@yield('komen')
<!-- footer -->
<div class="footer">
    <div class="container">
        <ul class="social-nav model-3d-0 footer-social">
            <li><a href="#" class="facebook">
                    <div class="front"><i class="facebook-sub"></i></div>
                    <div class="back"><i class="facebook-sub"></i></div></a></li>
            <li><a href="#" class="twitter">
                    <div class="front"><i class="twitter-sub"></i></div>
                    <div class="back"><i class="twitter-sub"></i></div></a></li>
            <li><a href="#" class="instagram">
                    <div class="front"><i class="instagram-sub"></i></div>
                    <div class="back"><i class="instagram-sub"></i></div></a></li>
        </ul>
        <h3><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Gd. D Lt 1, bawah tangga UDINUS dan Pondasi UDINUS, camp doscom<span><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 89675657864</span></h3>
        <div class="mail-foot">
            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:sekretariat@doscom.org">sekretariat@doscom.org</a>
        </div>
        <div class="mail-grids">
            <a class="btn btn-default" href='{{url('/masuk')}}'>Masuk Jasa</a>
            <a class="btn btn-default" href='{{url('/masukadmin')}}'>Masuk Admin</a>
            <a class="btn btn-default" href='{{url('/masukpengepul')}}'>Masuk Pengepul</a>
        </div>
    </div>
    <div class="copy-right">
        <p>Made with &hearts; by Dinus Open Source Community | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>

<!-- //footer -->
<!-- for bootstrap working -->
<script src={{URL::asset('vendor-sampah/js/bootstrap.js')}}></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!--	script ini digunakan untuk form login-->
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
