<?php

$jsonFile = '../server/lang.json'; 
$jsonData = file_get_contents($jsonFile);
$translations = json_decode($jsonData, true);

if ($testerlalangue) {
  $lang = $languetest;
} else {
  $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
  preg_match('/([a-z]{2})[-_]?[a-z]*/', $acceptLanguage, $matches);
  $lang = $matches[1];

  // Vérifie si la langue demandée existe dans les traductions, sinon utilise l'anglais par défaut
  if (!isset($translations[$lang])) {
    $lang = 'en';
  }
}

?>