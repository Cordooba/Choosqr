<?php
    if( isset($_SESSION['usser']) ){

        header('Location: '.$base_url.'/index.php');
        exit();

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logging Choosqr</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<div class="container">

      <form action="?login" method="POST" class="form-signin">
        <h2 class="form-signin-heading">Rellene sus datos...</h2>
        <input type="text" name="nickname" class="form-control" placeholder="Nombre de usuario" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuérdame
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
      </form>

    </div> <!-- /container -->

</body>
</html>