<!DOCTYPE html>

<?php include ("head.php"); ?>
    
    <?php

    $vert=6;
    $rouge=7;
    
     if (isset($_COOKIE["plein"])) {

        echo "<table>"
            ."<thead>"
            ."<tr>"
            ."<th>Date</th>"
            ."<th>Prix/L</th>"
            ."<th>Conso</th>"
            ."</tr>"
            ."</thead>"
            ."<tbody>";

        foreach ($_COOKIE["plein"] as $key => $value) {
          list($datePlein, $prixLitre, $moyenneLitresAuCent) = explode("|", $value);

          if($moyenneLitresAuCent < $vert){
            echo "<tr>"
            ."<td>$datePlein</td>"
            ."<td>$prixLitre</td>"
            ."<td class='vert'>$moyenneLitresAuCent</td>"
            ."</tr>";
            }
  
            elseif($moyenneLitresAuCent <= $rouge){
            echo "<tr>"
            ."<td>$datePlein</td>"
            ."<td>$prixLitre</td>"
            ."<td>$moyenneLitresAuCent</td>"
            ."</tr>";
            }
  
            else{
            echo "<tr>"
            ."<td>$datePlein</td>"
            ."<td>$prixLitre</td>"
            ."<td class='rouge'>$moyenneLitresAuCent</td>"
            ."</tr>";
            }

        }

        echo "</tbody>"
            ."</table>";

      } else {

        echo "<p>Ajouter un plein pour commencer</p>";

      }
    ?>
    </br>

    <a class="btn" href="ajout--formulaire.php">ajouter</a>
   

  </main>
  <footer><img class="car" src="driving.gif" alt="logo de voiture" width="150px" height="150px";></footer>

</body>
</html>