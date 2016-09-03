<?php

$page_title = "Home";

include_once('../header.php');

?>

<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <h2>Probable ubicacion de desaparecidos</h2>
      
      <div id="map-canvas" style="height: 500px;"></div> 
      
    </div>
  </div>
  <br />
  <br />
  	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Personas reportadas como desaparecidas</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Nombre</th>
                    <th>Probable ubicacion</th>
                     <th>Edad</th>
                      <th>Genero</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Juan Morales</td>
    <td>Reina Victoria E45</td>
    <td>67</td>
    <td>Masculino</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Maria Gonzalez</td>
    <td>Fra Angelico S24-123</td>
    <td>12</td>
    <td>Femenino</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Jorge Hidalgo</td>
    <td>Mariana de Jesus O98-21</td>
    <td>7</td>
    <td>Masculino</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Francisco Garzon</td>
    <td>Itchimbia</td>
    <td>10</td>
    <td>Masculino</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Olga Espin</td>
    <td>Av. Universitaria</td>
    <td>78</td>
    <td>Femenino</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Patricio Suarez</td>
    <td>Av. Gran Colombia</td>
    <td>6</td>
    <td>Masculino</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-map-marker"></span></button></p></td>
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Andres Herrera</td>
    <td>La Carolina</td>
    <td>45</td>
    <td>Masculino</td>
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
				zoom: 14,
				center: myLatlng,
				disableDefaultUI: true
			}
			var citymap = {
			        l1: { c: {lat: -0.198507, lng: -78.506091}, p: 150 },
			        l2: { c: {lat: -0.198753, lng: -78.506091}, p: 300 },
			        l3: { c: {lat: -0.215595, lng: -78.493920}, p: 200 },
			        l4: { c: {lat: -0.214136, lng: -78.513084}, p: 160 },
			        l5: { c: {lat: -0.202722, lng: -78.478101}, p: 70 },
			        l6: { c: {lat: -0.199146, lng: -78.472501}, p: 250 },
			        l7: { c: {lat: -0.221679, lng: -78.517157}, p: 230 },
			        l8: { c: {lat: -0.225298, lng: -78.475955}, p: 220 },
			        l9: { c: {lat: -0.219623, lng: -78.502107}, p: 100 },
			        l10: { c: {lat: -0.216827, lng: -78.506466}, p: 150 },
			        l11: { c: {lat: -0.200963, lng: -78.500742}, p: 140 },
			        l12: { c: {lat: -0.190133, lng: -78.504460}, p: 110 },
			        l13: { c: {lat: -0.206540, lng: -78.504864}, p: 180 },
			        l14: { c: {lat: -0.214137, lng: -78.512873}, p: 250 },
			        l15: { c: {lat: -0.212390, lng: -78.503420}, p: 300 },
			        l16: { c: {lat: -0.214137, lng: -78.520102}, p: 280 },
			        l17: { c: {lat: -0.225417, lng: -78.499528}, p: 50 }
			        
			      };
			
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			for (var city in citymap) {
	          var cityCircle = new google.maps.Circle({
	            strokeColor: '#FF0000',
	            strokeOpacity: 0.5,
	            strokeWeight: 2,
	            fillColor: '#FF0000',
	            fillOpacity: 0.2,
	            map: map,
	            center: citymap[city].c,
	            radius: citymap[city].p
	          });
			}

		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

<?php

include_once('../footer.php');

?>