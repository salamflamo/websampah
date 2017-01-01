@extends('home')
@section('daftar')
<div class="col-md-8 mail-grid-right">
    <h4><b>Daftar Gratis</b>, <span>jika sudah punya akun silahkan <button onclick="document.getElementById('id01').style.display='block'">Login</button> </span></h4>
    <br>
    <form action="/daftar" method="post">
        <h5>Nama*</h5>
        <input type="text" name="nama" value="Nama Lengkap" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama Lengkap';}" required="">
        <h6>Email*</h6>
        <input type="email" name="email" value="Email Aktiv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Aktiv';}" required="">
        <h6>Password*</h6>
        <input type="password" name="password" value="Email Aktiv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Aktiv';}" required="">
        <h5>No HP*</h5>
        <input type="text" name="nope" value="No HP Aktiv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'No HP Aktiv';}" required="">
        <h6>Alamat*</h6>
        <textarea name="alamat" placeholder="Alamat Lengkap Sekarang..." required=""></textarea>
        <h6>Kab. / Kota*</h6>
        <input type="text" name="kabkot" value="Kab. / Kota" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Kab. / Kota';}" required="">
        <br>
        <input type="submit" name="submit" value="Daftar" >
        {{ csrf_field() }}
    </form>
    <br>
    <h4>Sudah punya akun?, silahkan <button onclick="document.getElementById('id01').style.display='block'">Login</button></h4>
</div>
@endsection

@section('komen')
    <div class="mail">
        <div class="container">
            @if(isset($_GET['berhasil']))
                <div class="">
                    <h4 style="color: #00d6b2">Berhasil Komentar</h4>
                </div>
            @endif
            <h3>Buku Tamu</h3>
            <p class="qui"><span>Berikan komentar Anda untuk membantu kami dalam mengembangkan Web Sampah untuk menjadi lebih baik</span></p>

            <div class="col-md-8 mail-grid-right">
                <form action="/adminsampah/create_komentar" method="post">
                    <h5>Nama*</h5>
                    <input type="text" name="nama" value="Nama Anda" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama Anda';}" required="">
                    <h5>Email*</h5>
                    <input type="email" name="email" value="Email Anda" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Anda';}" required="">
                    <h6>Komentar*</h6>
                    <textarea name="komen" placeholder="Komentar Anda..." required=""></textarea>
                    <input type="submit" value="Komen" >
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
@endsection

@section('map')
<style>
  #map {
    width: 100%;
    height: 400px;
    background-color: grey;
  }
</style>
<div class="mail" id="maps">
    <h3>Lokasi Kantor Kami</h3>
</div>
<div id="map"></div>
<script>
    function initMap() {
        var uluru = {lat: -6.980824, lng: 110.409317};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkKkByS2hpTH_aAHvbfcztNrs_WQi8oow&callback=initMap">
</script>
@endsection
