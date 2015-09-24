<?php 
require "function/functions.php";
print pageclass::hdr("Where we work");?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD43ovdrPfp03wF2JFSF6wpKD0kxp-jb88">
</script>
<script type="text/javascript">
      function initialize() 
	  {var myCenter  = new google.maps.LatLng(-32.6, 26.8 );
	   var mapOptions = {
          center: myCenter,
          zoom: 10 ,
            mapTypeId:google.maps.MapTypeId.ROADMAP };
		var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
	  } 
    google.maps.event.addDomListener(window, 'load', initialize);
</script>  
<br/>
<br clear="all"/>
<br clear="all"/><div class="mainfulltop"><div id="map-canvas"></div>
<br clear="all"/>
<div align="center"><a href="#" title="Tyume Valley Schools Map"><img src="img/valleyMap.jpg" alt="Tyume Valley Schools" border="0"/></a>
<br/>
<strong>Tyume Valley Schools Map</strong></div>
<?php print pageclass::foot0();?>
</div>
</div>
<?php print pageclass::foot();?>