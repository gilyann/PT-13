<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domaine_audiovisuel.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="medias/js/domaine_audiovisuel.js"></script>
    <title>domaine_audiovisuel</title>
</head>

<body>
    <nav>
        <div class="left">
            <img src="medias/img/LOGOBLEU.svg" alt=" " class="logo">
        </div>
        <div class="right">
            <a href="#" class="etude">Poursuite d'études</a>
            <a href="#" class="but">BUT MMI</a>
            <a href="#">À propos</a>
        </div>
    </nav>

    <header>
        <p>Bienvenue dans le domaine de la</p>
        <h1>COMMUNICATION</h1>
        <p>En visitant les différentes attractions, tu découvriras les différents types d'études possibles !</p>
    </header>

    <section class="tdf lp">
        <div class="intitule">
            <h2>Licences pros</h2>
            <ul>
                <li cat="1" lien="0">Chargé de communication culturelle et média numérique (CCCM)</li> 
                <li cat="1" lien="1">Métiers de la communication : chargé de communication</li>
                <li cat="1" lien="6">E-commerce et Marketing numérique</li>
                <li cat="1" lien="4">Métiers de la communication : événementiel</li>
                <li cat="1" lien="5">Publicité</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div> 


          <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =2
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=1"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat1 c'.$data['id_intitule'].' '.$i.'">
 <div class="exit"></div>
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p>'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p>'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p>'.$data['url_formation'].'</p>
 <p class="ligne"></p>
<div class="timbre"></div>
</main>';
$i++;
}
$req = null;
echo('</section>'); 
?>

     


 <section class="tdf bachelors">
        <div class="intitule">
            <h2>Bachelors</h2>
            <ul>
                <li cat="2"lien="0">Chargé de projet digital</li>
                <li cat="2" lien="1">Chef de projet Digital</li> 
                <li cat="2" lien="3">Communication digitale et e-business</li>
                <li cat="2" lien="4">E-business </li>
                <li cat="2" lien="5">Marketing & Communication Digitale</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div> 

  <?php
  $sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
  FROM  intitule_formation, rel_domaine_int_form 
  WHERE id_domaine =2
  AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
  AND id_formation_type=2"; 
 // On prépare la requête avant l'envoi :
 $req = $link -> prepare($sql);
 $req -> execute();
 $i=0;
 // On crée une liste non numérotée avec les résultats
 while($data = $req -> fetch()){
  // On affiche chaque résultat sous forme d'un item de la liste
  echo '<main class="card cat2 c'.$data['id_intitule'].' '.$i.'"> 
  <div class="exit"></div>
  <h3>'.$data['nom_formation'].'</h3> 
  <p class="truc">Enseignements</p>
  <p>'.$data['enseignements'].'</p>
  <p class="type">Type</p>
  <p>'.$data['alternance_initiale'].'</p>
  <p class="deb">Débouchés</p>
  <p>'.$data['debouches']. '</p>
  <p class="eta">Etablissements</p>
  <p>'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
  <p class="url">URL</p>
  <p>'.$data['url_formation'].'</p>
  <p class="ligne"></p>
 <div class="timbre"></div>
 </main>';
 $i++;
 }
 $req = null;
 echo('</section>'); 
  
  ?>     





    <section class="tdf masters">
        <div class="intitule">
            <h2>Masters</h2>
            <ul>
                <li cat="3"lien="0">Communication des organisations</li>
                <li cat="3"lien="2">Communication publique et politique</li>
                <li cat="3"lien="3">Humanités numériques - Création et éditions numériques
Enseignements</li>
                <li cat="3"lien="4">Culture et communication</li>
                <li cat="3"lien="6">Direction de projets ou établissements culturels</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>



        <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =2
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=4"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat3 c'.$data['id_intitule'].' '.$i.'">
 <div class="exit"></div>
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p>'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p>'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p>'.$data['url_formation'].'</p>
 <p class="ligne"></p>
<div class="timbre"></div>
</main>';
$i++;
}
$req = null;
echo('</section>'); 
?>

 <section class="tdf masters">
        <div class="intitule">
            <h2>Cycles d'ingénieur</h2>
            <ul>
                <li cat="3"lien="0">Formation IMAC</li>
                <li cat="3"lien="1">Programme grande école</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>
        <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =2
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=3"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat3 c'.$data['id_intitule'].' '.$i.'">
 <div class="exit"></div>
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p>'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p>'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p>'.$data['url_formation'].'</p>
 <p class="ligne"></p>
<div class="timbre"></div>
</main>';
$i++;
}
$req = null;
echo('</section>'); 
?>

        <section class="tdf masters">
        <div class="intitule">
            <h2>Mastères</h2>
            <ul>
                <li cat="3"lien="0">Communication spé digitale</li>
                <li cat="3"lien="1">E-commerce</li>
                <li cat="3"lien="2">Management et Conseil en Systèmes d'Information</li>
                <li cat="3"lien="3">Communication & culture</li>
                <li cat="3"lien="4">Communication et stratégie social média</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>
        <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =2
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=5"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat3 c'.$data['id_intitule'].' '.$i.'">
 <div class="exit"></div>
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p>'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p>'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p>'.$data['url_formation'].'</p>
 <p class="ligne"></p>
<div class="timbre"></div>
</main>';
$i++;
}
$req = null;
echo('</section>'); 
?>
    <section class="tdf masteres">
</section>
  
</body>

</html>