@extends('layouts.utama')
@section('title','Home')
@section('content')
   <style>{!! $koding !!}</style>
    <h1>Ini Home</h1>
    <br>
@foreach ($dummy as $dum)
  <li><a href="/sampah/{{$dum->id}}">{{ $dum->username }}</a></li>
@endforeach
@endsection
