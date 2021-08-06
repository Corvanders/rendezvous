<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez Vous</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">

</head>
<body>

<a href="recherche.php">Rechercher un rendez vous</a>



<TABLE BORDER="1">
  <CAPTION> liste des rendez vous </CAPTION>
  <TR>
 <th> Nom </th>
 <th> Prenom </th>
 <th> Date </th>
 <th> Sexe </th>
 <th> Email </th>
 <th>telephone</th>
 <th>Heures</th>

  </TR>



<?php

try {
    // se connecter à mysql
    $bdd = new PDO('mysql:host=localhost;dbname=rendezvous', 'longueville', 'francois1156'); //connexion
    
    $reponse = $bdd->query('SELECT id, nom, prenom, jour, email, sexe, telephone, heure FROM clients');
    while ($donnees = $reponse->fetch())
    {
        //On affiche l'id et le nom du client en cours
        echo "</tr>";
       
        echo "<th> $donnees[prenom] </th>";
       echo "<th> $donnees[nom] </th>";
    echo "<th> $donnees[jour] </th>";
          echo "<th> $donnees[sexe] </th>";
        echo "<th> <a href=\"mailto: $donnees[email]\"> $donnees[email] </a> </th>";
        echo "<th> <a href=\"tel:$donnees[telephone]\">  $donnees[telephone] </a></th>"; //Le double quote échappe le balisage 
       echo "<th> $donnees[heure] </th>";
        echo "</TR>";
     
         
    }
    $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>



</body>
</html>