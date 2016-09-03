<?php

$page_title = "Home";

include_once('header.php');

?>

	<div class="container">
		<h2 class="form-signin-heading">Encuentra.me</h2>
      <form class="form-signin" action='signin.php'>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
      <form class="form-signin" action='register.php'>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
      </form>

    </div> <!-- /container -->

<?php

include_once('footer.php');

?>