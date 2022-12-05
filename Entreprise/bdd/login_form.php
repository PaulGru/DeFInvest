<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style_form_login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<title>Page de connexion</title>
</head>
<body>

	<?php
		include 'bdd.php';
		global $db;
	?>

	<div class="container">
  		<form method="POST">
		    <p>Bienvenue</p>
			<input type="email" name="lemail" id="lemail" placeholder="Votre email" required><br/>
			<input type="password" name="lpassword" id="lpassword" placeholder="Votre mot de passe" required><br/>
			
			<input type="submit" name="formlogin" id="formlogin" value="Connexion" required><br/>

			<a href="#">Mot de passe oublié</a>
		</form>

		<div class="drop drop-1"></div>
		<div class="drop drop-2"></div>
		<div class="drop drop-3"></div>
		<div class="drop drop-4"></div>
		<div class="drop drop-5"></div>
	</div>


	<?php include 'login_trait.php'; ?>

	

</body>
</html>