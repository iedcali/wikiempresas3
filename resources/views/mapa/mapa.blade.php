<style>
    #map {
        height: 20cm;
        width: 20cm;
    }
</style>

<div id="map">

</div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ1fUNExSmERLS6hUir3rCgFNp5DIlQss&callback=initMap"
        async defer></script>

