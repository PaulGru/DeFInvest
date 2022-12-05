<?php

	if(isset($_POST['formsend'])){
		extract($_POST);

		
		$password = htmlspecialchars($password);
		$cpassword = htmlspecialchars($cpassword);
		$semail = htmlspecialchars($semail);
		

		if(!empty($password) && !empty($cpassword) && !empty($semail)){

			if($password == $cpassword){
				$options = [
				'cost' => 12,
				];

				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

				$c = $db->prepare("SELECT email FROM users WHERE email = :email");
				$c->execute(['email' => $semail]);
				$result = $c->rowCount();

				if($result == 0){
					$q = $db->prepare("INSERT INTO users(email,password) VALUES(:email,:password)");
					$q->execute([
					'email' => $semail,
					'password' => $hashpass
					]);

					echo "Le compte a été crée";
				
				} else{
					echo "Cet email existe déjà";
				}

			} else{

				echo "les mots de passe ne sont pas identiques";	
			}

		}else{
			echo "les champs ne sont pas tous remplis";
		}
	}

?>