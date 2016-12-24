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
