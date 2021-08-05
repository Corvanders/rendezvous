

<?php


$host= 'localhost';
$user = 'root';
$pass = '';
$dbname = 'rendezvous';

try
{

    
      $pdo = new PDO('mysql:host=localhost;dbname=rendezvous', 'longueville', 'francois1156'); //connexion
      

      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


}
catch(PDOException $e)
{
      echo "Pas de connnexion à la bdd";
}

if(isset($_POST['bouton']))
{


    $nom = $_POST['nom'];  //Mes variables
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $date1 =  strtr($_REQUEST['jour'], '/', '-');
    $date = date('y-m-d', strtotime($date1));
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $heure = $_POST['matin'];
 

   
   


    $sql = "INSERT INTO clients(nom, prenom, sexe, jour, email, telephone, heure) VALUES (:nom,:prenom,:sexe,:jour,:email,:telephone, :heure)";
    $stmt = $pdo->prepare($sql);
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':sexe', $sexe);
    $stmt->bindParam(':jour', $date);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':heure', $heure);

$stmt->execute();
if($stmt->rowCount()==0){
  echo "Déjà un rendez vous ce jour si";
  
}else{
echo "Rendez vous validay";

}}
?>



