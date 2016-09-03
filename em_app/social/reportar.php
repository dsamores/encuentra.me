<?php

$page_title = "Home";

include_once('../header.php');

?>

<div class="container">
  
  <div class="row">
    <div class="col-md-8">
      <h2>Visto recientemente?</h2>
      
      <div id="map-canvas" style="height: 400px;"></div> 
      
    </div>
    <div class="col-md-4">
      <h2>Reportar desaparecido</h2>
      
        <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
            <label class="control-label" for="registration-date">Lo he visto recientemente:</label>
            <div class="form-group registration-date">
                <div class="input-group">
			      <span class="input-group-addon">
			        <input type="radio" aria-label="...">
			      </span>
			      <label class="control-label" for="">Si</label>
			      <span class="input-group-addon">
			        <input type="radio" aria-label="...">
			      </span>
			      <label class="control-label" for="">No</label>
			    </div><!-- /input-group -->
                <label class="control-label col-sm-3" for="registration-date">Hora:</label>
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_time" id="registration-time" type="time">
            		
            	</div>
            </div>
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Reportar</button>
        </form>
      
      
    </div>
  </div>

	<script type="text/javascript">
		function initialize() {
			var myLatlng = new google.maps.LatLng(-0.215353, -78.503481);
			var mapOptions = {
				zoom: 18,
				center: myLatlng,
				disableDefaultUI: true
			}
			
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	          var cityCircle = new google.maps.Circle({
	            strokeColor: '#FF0000',
	            strokeOpacity: 0.8,
	            strokeWeight: 2,
	            fillColor: '#FF0000',
	            fillOpacity: 0.35,
	            map: map,
	            center: {lat: -0.215353, lng: -78.503481},
	            radius: 70
	          });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

<?php

include_once('../footer.php');

?>