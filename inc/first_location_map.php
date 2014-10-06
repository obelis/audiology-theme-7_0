<?php

/* ###### Old single map shoercode ###########
/* single location map shortcode */
// [single_mini_map location="1, 2 , 3 or 4"]
/*
function single_mini_map( $atts ){
	
    $a = shortcode_atts( array(
        'location' => '1',
    ), $atts );
	ob_start();
	include("/home/obelis/public_html/wp-content/themes/roots/inc/location_variables.php");

	switch ($a['location']) {
	  case "1":
	    $lat = get_option( 'lat1' );
		$lon = get_option( 'lon1' );
		$address = $main_street.', '.$main_city.' '.$main_state.' '.$main_zip;
		$bubble = '<a href=\"https://www.google.com/maps/dir/Current+Location/'.$lon.','.$lat.'\"><span style=\"font-weight:bold;\">'.$main_street.'</span><br />'.$main_city.', '.$main_state.' '.$main_zip.'</a>';
		
	    break;
	  case "2":
	    $address = $second_street.', '.$second_city.' '.$second_state.' '.$second_zip;
		$bubble = '<span style=\"font-weight:bold;\">'.$second_street.'</span><br />'.$second_city.', '.$second_state.' '.$second_zip;
		$lat = get_option( 'lat2' );
		$lon = get_option( 'lon2' );
	    break;
	  case "3":
	    $address = $main_street.', '.$main_city.' '.$main_state.' '.$main_zip;
		$bubble = '<span style=\"font-weight:bold;\">'.$main_street.'</span><br />'.$main_city.', '.$main_state.' '.$main_zip;
		$lat = get_option( 'lat1' );
		$lon = get_option( 'lon1' );
	    break;
	  case "4":
	    $address = $main_street.', '.$main_city.' '.$main_state.' '.$main_zip;
		$bubble = '<span style=\"font-weight:bold;\">'.$main_street.'</span><br />'.$main_city.', '.$main_state.' '.$main_zip;
		$lat = get_option( 'lat1' );
		$lon = get_option( 'lon1' );
	    break;
	  default:
	    echo "Your favorite color is neither red, blue, or green!";
	}


	
	include("/home/obelis/public_html/wp-content/themes/roots/inc/first_location_map.php");    
	$result = ob_get_contents();
	ob_end_clean(); 	 
	return $result;
}

add_shortcode('single_mini_map', 'single_mini_map');

###### ###########


*/

$company_name = of_get_option('company_name');
$hash = rand();
?>
		
		
<script>
var lat = <?php echo json_encode($lat); ?>;
var lon = <?php echo json_encode($lon); ?>;
var myCenter=new google.maps.LatLng(lon,lat);
var directionsDisplay<?=$hash;?>;
var directionsService<?=$hash;?> = new google.maps.DirectionsService();


function initialize(){
  directionsDisplay<?=$hash;?> = new google.maps.DirectionsRenderer();

var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map<?=$hash;?> = new google.maps.Map(document.getElementById("googleMap<?=$hash;?>"),mapProp);
 
  
var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map<?=$hash;?>);

var infowindow = new google.maps.InfoWindow({
  content:'<?php echo '<h4>'.$company_name.'</h4>'.$bubble; ?>'
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map<?=$hash;?>,marker);
  });

  directionsDisplay<?=$hash;?>.setMap(map<?=$hash;?>);
  directionsDisplay<?=$hash;?>.setPanel(document.getElementById('directions-panel<?=$hash;?>'));
 var control<?=$hash;?> = document.getElementById('control<?=$hash;?>');
  control<?=$hash;?>.style.display = 'block';
  map<?=$hash;?>.controls[google.maps.ControlPosition.TOP_CENTER].push(control<?=$hash;?>);
}

function calcRoute() {
  var start<?=$hash;?> = document.getElementById('start<?=$hash;?>').value;
  var end<?=$hash;?> = document.getElementById('end<?=$hash;?>').value;
  var request<?=$hash;?> = {
    origin: start<?=$hash;?>,
    destination: end<?=$hash;?>,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService<?=$hash;?>.route(request<?=$hash;?>, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay<?=$hash;?>.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener(window, 'load', initialize);


</script>

  
  
<div id="googleMap<?=$hash;?>" class="map" style="width:100%;height:395px;"></div>

<div id="control<?=$hash;?>">
  <input id="end<?=$hash;?>" type="hidden" value="<?php echo $address; ?>">
 <!--  <strong>Your Addreess:</strong> -->
  <input id="start<?=$hash;?>" type="textbox" style="box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);">
  <input type="button" value="Get Directions" onclick="calcRoute();">
</div>  

<div id="directions-panel<?=$hash;?>"></div>
