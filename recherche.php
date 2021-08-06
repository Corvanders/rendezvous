<?php


$bdd = new PDO('mysql:host=localhost;dbname=rendezvous', 'longueville', 'francois1156');  //connexion


$touslesclientssearch = "SELECT * FROM clients ";
if (isset($_POST['s']) and !empty($_POST['s'])) { // Je vérifie qu'une recherche n'est pas vide
    $recherche = htmlspecialchars($_POST['s']); // Evite que l'utilisateur rentre du html dans la recherche
$touslesclientssearch = $touslesclientssearch . 'WHERE  CONCAT(nom, " ", prenom, " ", email, " ", telephone, " ", sexe, " ", jour) LIKE "%' . $recherche . '%" ';
}
$touslesclientssearch .= "ORDER BY ID DESC";

$request = $bdd->query($touslesclientssearch);



$resultats = $request->fetchAll(); // Stock les résultats ici tout es dans un tableau        


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rechercher un utilisateur</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">

</head>

<body>

    <form method="POST">
        <input type="search" name="s" placeholder="Recherche un client">
        <input type="submit" name="go">

    </form>

    

<h1>Liste des utilisateurs</h1>
    
    <section class="afficher_utilisateur">
        <table>
            <?php

            if (count($resultats) == 0) {
            ?>
                <p>Aucun client trouvé</p>
                <?php

            } else {

                foreach ($resultats as $client) {
                ?>
                    <tr>

                        <td><?= $client['nom'] ?></td>

                        <td><?= $client['prenom'] ?></td>


                        <td><?= $client['email'] ?></td>

                        <td><?= $client['sexe'] ?></td>

                        <td><?= $client['telephone'] ?></td>

                        <td><?= $client['jour'] ?></td>

                        <td><?= $client['heure'] ?></td>

                    </tr>
            <?php

                }
            }

            ?>

        </table>
    </section>

    <h2>Contacté les utilisateurs</h2>
        <a href="rendezvous.php">Gestionnaire de contacts</a>
    <?php

    ?>
</body>

</html>