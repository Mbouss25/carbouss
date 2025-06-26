<?php
// Adresse email à laquelle tu veux recevoir les candidatures
$to = "mohamedbousserima23@gmail.com";
$subject = "Nouvelle demande de collaboration influenceur";

// Protection basique contre les spams/injections
function clean($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

// Récupération des données du formulaire et infos complémentaires
$name = clean($_POST['name'] ?? '');
$email = clean($_POST['email'] ?? '');
$phone = clean($_POST['phone'] ?? '');
$platform = clean($_POST['platform'] ?? '');
$followers = clean($_POST['followers'] ?? '');
$niche = clean($_POST['niche'] ?? '');
$message = clean($_POST['message'] ?? '');

$ip = clean($_POST['ip'] ?? '');
$city = clean($_POST['city'] ?? '');
$region = clean($_POST['region'] ?? '');
$country = clean($_POST['country'] ?? '');
$userAgent = clean($_POST['userAgent'] ?? '');
$language = clean($_POST['language'] ?? '');
$platformInfo = clean($_POST['platformInfo'] ?? '');
$timestamp = clean($_POST['timestamp'] ?? '');
$ctf_id = clean($_POST['ctf_id'] ?? '');
