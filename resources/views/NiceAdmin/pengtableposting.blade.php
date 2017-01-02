<!DOCTYPE html>
<!DOCTYPE html>
@extends('NiceAdmin.mastermember')
@section('title', 'Tabel Posting')
@section('logout', 'keluarpeng')
@section('admin', 'pengadmin')
@section('profile','#')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i>Daftar Posting</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/adminsampah">Home</a></li>
                    <li><i class="fa fa-table"></i>Daftar</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body">
                        @foreach($posting as $post)
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                   {{ $post->judul}}
                                </div>
                                <div class="panel-content">
                                    <img src="/imageartikel/{{$post->gambar}}" style="width: 30%;height: 20%;padding: 10px 10px">
                                    <br>
                                    {{$post->artikel}}
                                    <br>
                                    <p>Dibuat Pada : {{$post->created_at}} oleh : {{$post->oleh}}</p>
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
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection

@section('navbar')
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="/pengadmin ">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/pengadmin/mengepul" class="">
                        <i class="icon_archive_alt"></i>
                        <span>Mengepul</span>
                    </a>
                </li>
                <li>
                    <a href="/pengadmin/posting" class="">
                        <i class="icon_document"></i>
                        <span>Posting</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/pengadmin/tabelposting">
                        <i class="icon_table"></i>
                        <span>Tabel Posting</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
@endsection