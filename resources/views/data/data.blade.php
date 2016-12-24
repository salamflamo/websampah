@extends('layouts.utama')
@section('title', 'Data')
@section('content')
        <h1>Data ke {{ $data }}</h1>
        <h3>Petugas {{ $jasa }}</h3>
        <h4>Daftar Nama Pengguna :</h4>
          <li>{{$dummy->username}}</li>
          <li>{{$dummy->password}}</li>
        
@endsection
