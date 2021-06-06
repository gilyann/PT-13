<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact - </title>
</head>
<body>
 

<?php
$host = "sqletud.u-pem.fr";
$dbname = "gpadre_db";
$username = "gpadre";
$password = "tabouret";

try {
    $link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}

catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
 
if(isset($_POST["name"]) & isset($_POST["email"]) & isset($_POST["msg"]) ){
  $sql = "INSERT INTO contact_airlines(name, email, msg) VALUES (:name, :email, :msg)";
  // On prépare la requête avant l'envoi :
  $req = $link -> prepare($sql);
  // On exécute la requête en insérant la valeur transmise en POST
  $req -> execute(array('name' => $_POST["name"], 
                        'email' => $_POST["email"], 
                        'msg' => $_POST["msg"]));
                        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['msg'])) {

                          $retour = mail('gpadre@etud.u-pem.fr', $_POST['name'], $_POST['msg']);
     
                      }

  // $req = null;
  // On affiche l'adresse inscrite en évitant une injection de code JS
  echo "<h1 style='margin: auto;'>Merci pour votre message, j'espère que votre voyage se passe bien !</h1>";
}
?>

  <a href="index.php">Retour à l'accueil</a>
</body>
</html>
