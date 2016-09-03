<?php

$page_title = "Home";

include_once('../header.php');

?>

<div class="container">
  
  <div class="row">
    <div class="col-md-8">
      <h2>Camina para encontrar mas sitios seguros</h2>
      
      <div id="map-canvas" style="height: 400px;"></div> 
      
    </div>
    <div class="col-md-4">
      <h2>Clinica Mosquera</h2>
      <p>Clinica especializada en heridas.</p>
      <p>Alberga 50 personas.</p>
      <p>Certificada por el Ministerio de Salud en caso de emergencias</p>
        <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Visitado</button>
        </form>
      
      
    </div>
  </div>
  <br />
  <br />
  	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Lugares que has visitado</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Nombre</th>
                    <th>Direcci&oacute;n</th>
                     <th>Fecha</th>
                      <th>Puntos</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>UPC Mariscal</td>
    <td>Reina Victoria E45</td>
    <td>4 Ago. 2016</td>
    <td>+3 pts.</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Sitio seguro Cumbaya</td>
    <td>Fra Angelico S24-123</td>
    <td>10 Ago. 2016</td>
    <td>+10 pts.</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Hospital Metropolitano</td>
    <td>Mariana de Jesus O98-21</td>
    <td>2 Jun. 2016</td>
    <td>+8 pts.</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    
    </tbody>
        
</table>
</div>
  
    
</div>

	<script type="text/javascript">
		function initialize() {
			var myLatlng = new google.maps.LatLng(-0.215464, -78.501468);
			var mapOptions = {
				zoom: 16,
				center: myLatlng,
				disableDefaultUI: true
			}
			
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	          var cityCircle = new google.maps.Circle({
	            strokeColor: '#FF0000',
	            strokeOpacity: 0.5,
	            strokeWeight: 2,
	            fillColor: '#FF0000',
	            fillOpacity: 0.2,
	            map: map,
	            center: {lat: -0.215464, lng: -78.501468},
	            radius: 150
	          });

	          var contentString = '<div id="content">'+
	            '<div id="siteNotice">'+
	            '</div>'+
	            '<h1 id="firstHeading" class="firstHeading">Clinica Mosquera</h1>'+
	            '<div id="bodyContent">'+
	            '<p>Alberga 50 personas</p>'+
	            '</div>'+
	            '</div>';
	            
	          var infowindow = new google.maps.InfoWindow({
	              content: contentString
	            });
	            

	            var marker = new google.maps.Marker({
	              position: {lat: -0.215441, lng: -78.500221},
	              map: map,
	              title: 'Clinica Mosquera'
	            });
	            marker.addListener('click', function() {
	              infowindow.open(map, marker);
	            });

	            var marker2 = new google.maps.Marker({
	              position: {lat: -0.214375, lng: -78.497717},
	              map: map,
	              title: 'Hospital Eugenio Espejo'
	            });

	            var marker3 = new google.maps.Marker({
	              position: {lat: -0.216310, lng: -78.503535},
	              map: map,
	              title: 'Cruz Roja'
	            });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

<?php

include_once('../footer.php');

?>