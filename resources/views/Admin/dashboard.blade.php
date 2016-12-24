@extends('Admin.admin')
@section('dashboard')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
             <h2>ADMIN DASHBOARD</h2>
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
          <!-- /. ROW  -->
          <div class="row text-center pad-top">

          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" >
                   <i class="fa fa-envelope-o fa-5x"></i>
              <h4>Pesan Masuk</h4>
              </a>
          </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                <a href="/adminsampah/table" >
                <i class="fa fa-users fa-5x"></i>
                <h4>Jasa</h4>
                </a>
              </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
               <a href="/adminsampah/masyarakat" >
                   <i class="fa fa-users fa-5x"></i>
                   <h4>Masyarakat</h4>
             </a>
             </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
               <a href="/adminsampah/register" >
                 <i class="fa fa-user fa-5x"></i>
                 <h4>Reg Jasa</h4>
               </a>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
               <div class="div-square">
                 <a href="/adminsampah/register_mas" >
                     <i class="fa fa-user fa-5x"></i>
                     <h4>Reg Masya.</h4>
                 </a>
               </div>
          </div>
      </div>
         <!-- /. ROW  -->
        <div class="row text-center pad-top">

         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" >
<i class="fa fa-clipboard fa-5x"></i>
              <h4>All Docs</h4>
              </a>
              </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" >
<i class="fa fa-gear fa-5x"></i>
              <h4>Settings</h4>
              </a>
              </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" >
<i class="fa fa-wechat fa-5x"></i>
              <h4>Live Talk</h4>
              </a>
              </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" >
<i class="fa fa-bell-o fa-5x"></i>
              <h4>Notifications </h4>
              </a>
              </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                   <a href="blank.html" >
<i class="fa fa-rocket fa-5x"></i>
              <h4>Launch</h4>
              </a>
              </div>


          </div>

      </div>
          <!-- /. ROW  -->

     <!-- /. PAGE INNER  -->
    </div>
 <!-- /. PAGE WRAPPER  -->
</div>
@endsection
