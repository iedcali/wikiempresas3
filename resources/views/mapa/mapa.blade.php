<style>
    #map {
        height: 20cm;
        width: 20cm;
    }
</style>

<div id="map">

</div>
<script>
    function initMap() {
  var myLatLng = {lat: -25.363, lng: 131.044};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ1fUNExSmERLS6hUir3rCgFNp5DIlQss&callback=initMap"
        async defer></script>

