<?php include ("head.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>suivi-carbu — auto++</title>
  <link rel="stylesheet" href="style.css">
  <meta name="description" content="Suivez facilement l'évolution de la consommation de votre véhicule, un plein à la fois !">
</head>
<body>
<main class="formulaire">
   
    <form action="ajout--traitement.php" method="post">
      
      <label for="prix-au-litre">Prix payé (au litre)</label>
      <input type="number" name="prix-au-litre" id="prix-au-litre" step="0.001">

      <label for="volume-plein">Volume total du plein (en litres)</label>
      <input type="number" name="volume-plein" id="volume-plein" step="0.01">

      <label for="kilometres-parcourus">Kilomètres parcourus (depuis le dernier plein)</label>
      <input type="number" name="kilometres-parcourus" id="kilometres-parcourus" step="0.01">
</br>
</br>
      <button>ajouter</button>
</form>

<footer>
  <img class="car" src="driving.gif" alt="logo de voiture" width="200px" height="200px";>
</footer>
  
</main> 
</body>
</html>