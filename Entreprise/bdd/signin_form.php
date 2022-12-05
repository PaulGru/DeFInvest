<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style_form_login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<title>Page d'inscription</title>
</head>
<body>

	<?php
		include 'bdd.php';
		global $db;
	?>


	<div class="container">
  		<form method="POST">
		    <p>Bienvenue</p>
			<input type="email" name="semail" id="semail" placeholder="Votre email" required><br/>
			<input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
			<input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mot de passe" required><br/>
			
			<input type="submit" name="formsend" id="formsend" value="Créer son compte" required><br/>
		</form>

		<div class="drop drop-1"></div>
		<div class="drop drop-2"></div>
		<div class="drop drop-3"></div>
		<div class="drop drop-4"></div>
		<div class="drop drop-5"></div>
	</div>


	<?php include 'signin_trait.php'; ?>	


</body>
</html>