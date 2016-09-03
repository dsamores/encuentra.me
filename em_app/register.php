<?php

$page_title = "Sign In";

include_once('header.php');

?>

	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Registrate</h2>
        <label for="inputEmail" class="sr-only">Nombre</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Nombre" required autofocus>
        <label for="inputEmail" class="sr-only">Apellido</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Apellido" required>
        <label for="inputEmail" class="sr-only">Cedula</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Cedula" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrate</button>
      </form>

    </div> <!-- /container -->

<?php

include_once('footer.php');

?>