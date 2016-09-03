<?php

$page_title = "Sign In";

include_once('header.php');

?>

	<div class="container">

      <form class="form-signin" action="social/perfil.php">
        <h2 class="form-signin-heading">Ingresar</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
      
      <h2 class="cover-heading" style="text-align: center;">- &oacute; -</h2>
      
      <a class="btn btn-block btn-social btn-lg btn-facebook">
	    <span class="fa fa-facebook"></span> Ingresa con Facebook
	  </a>

    </div> <!-- /container -->

<?php

include_once('footer.php');

?>