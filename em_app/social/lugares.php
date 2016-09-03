<?php

$page_title = "Home";

include_once('../header.php');

?>

<div class="container">
  
  <div class="row">
    <div class="col-md-8">
      <h2>Tu ubicaci&oacute;n actual</h2>
      
      <div id="map-canvas" style="height: 400px;"></div> 
      
    </div>
    <div class="col-md-4">
      <h2>Horas usuales</h2>
      
        <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
            <div class="form-group registration-date">
                <label class="control-label col-sm-3" for="registration-date">Nombre:</label>
            	<div class="form-group">
						<input type="text" class="form-control" id="name" name="Nom" placeholder="Nombre" required>
					</div>
                <label class="control-label col-sm-3" for="registration-date">Desde:</label>
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_time" id="registration-time" type="time">
            		
            	</div>
                <label class="control-label col-sm-3" for="registration-date">Hasta:</label>
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_time" id="registration-time" type="time">
            		
            	</div>
            </div>
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Agregar</button>
        </form>
      
      
    </div>
  </div>
  <br />
  <br />
  	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Lugares registrados</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Nombre</th>
                    <th>Direcci&oacute;n</th>
                     <th>Horas</th>
                      <th>Editar</th>
                      
                       <th>Borrar</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Trabajo</td>
    <td>Republica del Salvador E4-12</td>
    <td>10:00AM - 05:00PM</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Casa</td>
    <td>La Gasca N12-32</td>
    <td>06:00PM - 08:00AM</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
    
 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Futbol</td>
    <td>6 de Diciembre S12-32</td>
    <td>07:00PM - 08:00PM</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
   
    
   
    
    </tbody>
        
</table>
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