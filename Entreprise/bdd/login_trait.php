<?php
session_start();
	
	if(isset($_POST['formlogin'])){
		extract($_POST);

		$lpassword = htmlspecialchars($lpassword);
		$lemail = htmlspecialchars($lemail);

		if(!empty($lemail) && !empty($lpassword)){

			$requser = $db->prepare("SELECT * FROM users WHERE email = :email");
			$requser->execute(['email' => $lemail]);
			$userexist = $requser->fetch();

			if($userexist == true){

				if(password_verify($lpassword, $userexist['password'])){

					$_SESSION['id'] = $userexist['id'];
					$_SESSION['email'] = $userexist['email'];
					header("Location: ../product/wallet.php?id=".$_SESSION['id']);


				} else{

					echo "Le mot de passe est incorrect.";
				}

			} else{
				echo "l'email ". $lemail . " n'existe pas";
			}

		} else{
			echo "Veuillez compléter l'ensemble des champs";
		}
	}