<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact - </title>
  <link rel="stylesheet" href="../styles/envoi.css">
</head>
<body>
 
<?php
$link = new PDO('mysql:host=localhost;dbname=test', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 
if(isset($_POST["name"]) & isset($_POST["email"]) & isset($_POST["user_message"])){
  $sql = "INSERT INTO contact(nom,email,message) VALUES (:nom,:email,:message)";
  // On prépare la requête avant l'envoi :
  $req = $link -> prepare($sql);
  // On exécute la requête en insérant la valeur transmise en POST
  $req -> execute(array('nom' => $_POST["name"], 
                        'email' => $_POST["email"], 
                        'message' => $_POST["user_message"]));

  // $req = null;
  // On affiche l'adresse inscrite en évitant une injection de code JS
  echo "<h1>Merci pour votre message !</h1>";
}
?>
 

  <a href="../index.php">Retour à l'accueil</a>
</body>
</html>
