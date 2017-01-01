<!DOCTYPE html>
@extends('NiceAdmin.master')
@section('title','Daftar Postingan')
@section('tables')
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
                            @if(count($posting) == 0)
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Belum Ada Postingan
                                    </div>
                                </div>
                            @endif
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                   {{ $post->judul}}
                                </div>
                                <div class="panel-content">
                                    <img src="/imageartikel/{{$post->gambar}}" style="width: 30%;height: 20%;padding: 10px 10px">
                                    <br>
                                    {{$post->artikel}}
                                    <br>
                                    <p>Dibuat Pada : {{$post->created_at}}</p>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection
