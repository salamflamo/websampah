<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->    
    <link href="{{URL::asset('nice-assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{URL::asset('nice-assets/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{URL::asset('nice-assets/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('nice-assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{URL::asset('nice-assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('nice-assets/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{URL::asset('nice-assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{URL::asset('nice-assets/css/owl.carousel.css')}}" type="text/css">
	<link href="{{URL::asset('nice-asset/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="{{URL::asset('nice-assets/css/fullcalendar.css')}}">
	<link href="{{URL::asset('nice-assets/css/widgets.css')}}" rel="stylesheet">
    <link href="{{URL::asset('nice-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('nice-assets/css/style-responsive.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('nice-assets/css/xcharts.min.css')}}" rel=" stylesheet">
	<link href="{{URL::asset('nice-assets/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <!--logo start-->
            <a href="{{url('/niceadmin')}}" class="logo">Admin<span class="lite">Sampah</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{URL::asset('nice-assets/img/avatar1_small.jpg')}}">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="/forgets"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="/adminsampah ">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="/adminsampah/register" class="">
                          <i class="icon_document_alt"></i>
                          <span>Input Member</span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Elements</a></li>
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="/adminsampah/table" class="">
                          <i class="icon_table"></i>
                          <span>Daftar Member</span>
                      </a>
                  </li>
                  <li>
                      <a href="/adminsampah/posting" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Posting Artikel</span>
                      </a>
                  </li>
                  <li>
                      <a href="/adminsampah/daftarposting" class="">
                          <i class="icon_table"></i>
                          <span>Daftar Postingan</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar start-->
      @yield('dashboard')
      @yield('tables')
      @yield('form')
      @yield('posting')
          <div class="text-center">
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
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="{{URL::asset('nice-assets/js/jquery.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/jquery-ui-1.10.4.min.js')}}"></script>
    <script src="{{URL::asset('nice-assets/js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('nice-assets/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{URL::asset('nice-assets/js/bootstrap.min.js')}}"></script>
    <!-- nice scroll -->
    <script src="{{URL::asset('nice-assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::asset('nice-assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{URL::asset('nice-assets/assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('nice-assets/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('nice-assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{URL::asset('nice-assets/js/owl.carousel.js')}}" ></script>
    <!-- jQuery full calendar -->
    <<script src="{{URL::asset('nice-assets/js/fullcalendar.min.js')}}"></script> <!-- Full Google Calendar - Calendar -->
	<script src="{{URL::asset('nice-assets/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{URL::asset('nice-assets/js/calendar-custom.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{URL::asset('nice-assets/js/jquery.customSelect.min.js')}}" ></script>
	<script src="{{URL::asset('nice-assets/assets/chart-master/Chart.js')}}"></script>
   
    <!--custome script for all page-->
    <script src="{{URL::asset('nice-assets/assets/chart-master/Chart.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{URL::asset('nice-assets/js/sparkline-chart.js')}}"></script>
    <script src="{{URL::asset('nice-assets/js/easy-pie-chart.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/xcharts.min.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/jquery.autosize.min.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/jquery.placeholder.min.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/gdp-data.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/morris.min.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/sparklines.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/charts.js')}}"></script>
	<script src="{{URL::asset('nice-assets/js/charts.js')}}"></script>

  <!-- ck editor -->
  <script type="text/javascript" src="{{URL::asset('nice-assets/assets/ckeditor/ckeditor.js')}}"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
