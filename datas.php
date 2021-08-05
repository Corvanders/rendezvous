<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test recup données</title>
</head>
<body>
    
<h1>Affichage des données issues du forumlaire</h1>

<?php
var_dump($_POST);

?>
<ul>
        <li><?php echo $_POST['nom']; ?></li>
        <li><?php echo $_POST['prenom']; ?></li>
        <li><?php echo $_POST['jour']; ?></li>

</ul>

</body>
</html>