<?php
list($lat, $lang) = explode(',', $contact['Contact']['position']);
$this->append('bottomScript');
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fa"></script>
<script type="text/javascript">
    var initLat = <?php echo $lat?>;
    var initLng = <?php echo $lang?>;
    var initZoom = 17;
    var initidObjectMap=39006;
    function initialize() {
        var latlng = new google.maps.LatLng(initLat, initLng);
        var myOptions = {
            zoom: initZoom,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(
            document.getElementById("map_canvas"),
            myOptions
        );
        marker = new google.maps.Marker({
            position: latlng,
            map: map ,
            draggable:false
        });
    }
    window.onload = function(){
        alert('aaaaaaa');
//        initialize();
    }
</script>
<?php
$this->end();
?>
<div class="parallaxOffset no-padding fixedContent contact-intro">
    <div class="w100 map" id="map_canvas"></div>
</div>