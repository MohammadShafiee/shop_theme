<?php
list($lat, $lang) = explode(',', $contact['Contact']['position']);
$this->append('bottomScript');;
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fa&callback=initialize"></script>
<script type="text/javascript">
    var initLat = <?php echo $lat?>,
        initLng = <?php echo $lang?>,
        initZoom = 15;
    function initialize() {
        var map, myOptions, marker, latlng = new google.maps.LatLng(initLat, initLng);
        myOptions = {
            zoom: initZoom,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(
            document.getElementById("map_canvas"),
            myOptions
        );
        marker = new google.maps.Marker({
            position: latlng,
            map: map,
            draggable: false
        });
    }

</script>
<?php
$this->end();
?>
<div class="parallaxOffset no-padding fixedContent contact-intro">
    <div class="w100 map" id="map_canvas" style="height: 400px"></div>
</div>