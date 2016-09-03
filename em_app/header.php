<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($page_title) ? $page_title : "Ciudades Resilientes"?></title>
    
	<script src="http://localhost:8888/em_app/assets/js/jquery.js"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	
  	
	<link rel="stylesheet" href="http://localhost:8888/em_app/assets/css/font-awesome.css">
	<link rel="stylesheet" href="http://localhost:8888/em_app/bootstrap-social.css">
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBArBdhuQgtpWeaEgCU8DXu1Tx6oyryQGM"></script>
	
	
	<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
	<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
  
  </head>
  <body>
  <script type="text/javascript">
  function addNow() {
	  nowDate = moment().tz("Europe/London").format('YYYY-MM-DD');
	  nowTime = moment().tz("Europe/London").format('HH:mm:ss');
	  document.getElementById('registration-date').value = nowDate;
	  document.getElementById('registration-time').value = nowTime;
	  set = setTimeout(function () { addNow(); }, 1000);
	}

	function stopNow() {
	  clearTimeout(set);
	}
  </script>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Encuentra.me</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/em_app/social/perfil.php">Perfil</a></li>
        <li><a href="/em_app/listados/desaparecidos.php">Desaparecidos</a></li>
        <li><a href="/em_app/listados/rescatados.php">Rescatados</a></li>
        <li><a href="/em_app/admin/dashboard.php">Dashboard</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
<?php
