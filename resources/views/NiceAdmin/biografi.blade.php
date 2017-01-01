@extends('NiceAdmin.master')
@section('title','Detail Biografi')
@section('biografi')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <section class="panel">
                <div class="bio-graph-heading">
                </div>

                <div class="panel-body bio-graph-info">
                    <h1>Bio Grafi</h1>
                    @if($punya == 1)
                        <img src="/images/{{$views->foto}}" style="width: 20%;height: 20%; border-radius: 60%">
                    @elseif($punya == 2)
                        <img src="/imagejasa/{{$views->foto}}" style="width: 20%;height: 20%; border-radius: 60%">
                    @endif
                    <div class="row">
                        <div class="bio-row">
                            <p><span>Nama</span>: {{$nama}} </p>
                        </div>
                        <div class="bio-row">
                            <p><span>Email</span>: {{$views->email}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>No HP</span>: {{$views->nope}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Alamat </span>: {{$views->alamat}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Kab. / Kota </span>: {{$views->kabkot}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Waktu Daftar </span>: {{$views->created_at}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel-body">
                            <div class="btn-group">
                                <a href="/adminsampah/table" class="btn btn-primary">Kembali</a>
                                @if($punya == 1)
                                    <a class="btn btn-success" href="/adminsampah/table/{{$views->id}}/editmas"><i class="icon_clipboard"></i></a>
                                    <a href="/adminsampah/table/deletemas/{{$views->id}}" onclick="return confirm('Anda yakin dihapus?');" class="btn btn-danger"><i class="icon_close_alt2"></i></a>
                                @elseif($punya == 2)
                                    <a class="btn btn-success" href="/adminsampah/table/{{$views->id}}/editjas"><i class="icon_clipboard"></i></a>
                                    <a href="/adminsampah/table/deletejas/{{$views->id}}" onclick="return confirm('Anda yakin dihapus?');" class="btn btn-danger"><i class="icon_close_alt2"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
</section>
@endsection