

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>


<h1>Horaires d'ouverture</h1>

<p>Du mardi au vendredi, de 9h à 12h puis de 13h à 18h
Le samedi de 9h à 19h</p>


<div class="rgpd">
<p>Bonjour nous allons stockés vos données.</p>
<p>Dans une base de données de gens très méchants.</p>
<p>Et revendue au gouvernement reptilien.</p>
<p>Bisous.</p>
</div>


<a href="recherche.php">Page d'admin</a>
<form action="insertion.php"  method="post">
<p>

    <label for="nom">Votre Nom</label>
    <input type="text" id="nom" name="nom" required/>
</p>

<p>

<p>

    <label for="prenom">Votre Prénom</label>
    <input type="text" id="prenom" name="prenom" required/>
   

</p>

<p>Vous êtes</p>

<input type="radio" name="sexe" id="sexe" value="h" checked="checked" required>

<label for="sexe">Un homme</label>

<input type="radio" name="sexe" id="sexe" value="f">

<label for="sexe">Une femme</label>

<input type="radio" name="sexe" id="sexe" value="Inconnue">

<label for="sexe">Ne sais pas</label>

</p>
<p>

        <label for="groupe">Sélectionner le jour </label>

<p>


</p>
      

        <label >Date</label>

<input type="date" name="jour" id="jour" requied min="2021-08-04" ></input>

<p>

</p>
<label for="matin">Choisissez un chréneau le matin</label>

<input type="time" id="matin" name="matin"
       min="09:00" max="12:00" required step="3600">

<script>

const picker = document.getElementById('jour');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([1,0].includes(day)){
    e.preventDefault();
    this.value = '';
    alert('Fermé le dimanche et le lundi');
  }
});

</script>


<p>

</p>

<label for="email">Votre email</label>
<input type="text" name="email" required></input>
<p>

<label for="telephone">Votre téléphone</label>
<input type="tel" name="telephone" placeholder="numero" required/>
<input type="submit"  name="bouton" value="bouton">
</p>

</form>

















</table>
</body>
</html>