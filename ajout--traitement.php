<?php

  // récupère les données postées
  $prixLitre   = $_POST["prix-au-litre"] ?? false;
  $volumePlein = $_POST["volume-plein"] ?? false;
  $kmParcourus = $_POST["kilometres-parcourus"] ?? false;

  // affiche un message si un champ n'est pas rempli
  if ($prixLitre == false) exit("merci de renseigner le prix au litre, payé à la pompe svp");

  // calcul à effectuer
  $moyenneLitresAuCent = ($volumePlein*100) /$kmParcourus;
  $moyenneLitresAuCent = number_format($kmParcourus,2);
  // date à cet instant T
  $dateObjet = new DateTime(null, new DateTimeZone("Europe/Paris"));
  $datePlein = $dateObjet->format("d-m-Y H:i");

  // dépose un nouveau cookie
  $cookieIndex = $dateObjet->format("YmdHi");
  $cookieContent = "$datePlein|$prixLitre|$moyenneLitresAuCent";
  setcookie("plein[$cookieIndex]", $cookieContent, strtotime( "+6 months" ));

  // redirection vers la page d'accueil
  header("Location: index.php");
  exit; // force l'arrêt de ce script après avoir demander la redirection

?>