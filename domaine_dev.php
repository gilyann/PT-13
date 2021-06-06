<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domaine_dev.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="medias/js/domaine.js"></script>
    <title>domaine_développement</title>
</head>

<body>
<?php include 'nav.php' ?>

    <header>
        <p>Bienvenue dans le domaine du</p>
        <h1>DÉVELOPPEMENT</h1>
        <p>En visitant les différentes attractions, tu découvriras les différents types d'études possibles !</p>
    </header>

    <section class="tdf lp">
        <div class="intitule">
            <h2>Licences pros</h2>
            <ul>
                <li data-cat="1" data-lien="0"> Data Mining</li> 
                <li data-cat="1" data-lien="1">Développement Web </li>
                <li data-cat="1" data-lien="2">DIWA Développeur et Intégrateur de 
Web Application</li>
                <li data-cat="1" data-lien="3">Projet web et mobile</li>
                <li data-cat="1" data-lien="4">Métiers de l’informatique : conception
                </li> 
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div> 

    


          <?php
$host="sqletud.u-pem.fr";
$dbname="gpadre_db";
$username="gpadre";
$password="tabouret";
$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule, url_video
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =1
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=1"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat1 c'.$data['id_intitule'].' lien'.$i.'">
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
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>

 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo '<iframe width="350" height="250" src="'.$data['url_video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>'; 

}elseif(empty($data['url_video'])){
    echo '<div class="sans_video">A découvrir plus tard!</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-dev.svg" alt=" ">
</div>
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
                <li data-cat="2" data-lien="0">  Développement web option architecte big data</li>
                <li data-cat="2" data-lien="1">Développement web</li> 
                <li data-cat="2" data-lien="5">Game Design & Programming</li>
                <li data-cat="2" data-lien="3">Développeur web</li>
                <li data-cat="2" data-lien="4">Développeur web et mobile</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div> 

  <?php
  $link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
  (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  // pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
  $sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule, url_video
  FROM  intitule_formation, rel_domaine_int_form 
  WHERE id_domaine =1
  AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
  AND id_formation_type=2"; 
 // On prépare la requête avant l'envoi :
 $req = $link -> prepare($sql);
 $req -> execute();
 $i=0;
 // On crée une liste non numérotée avec les résultats
 while($data = $req -> fetch()){
  // On affiche chaque résultat sous forme d'un item de la liste
  echo '<main class="card cat2 c'.$data['id_intitule'].' lien'.$i.'"> 
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
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
  <p class="ligne"></p>';

  if(isset($data['url_video']) AND !empty($data['url_video'])){
    echo' <iframe width="350" height="250" src='.$data['url_video'].' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>';
 }elseif(empty($data['url_video'])){
    echo'<div class="sans_video">A découvrir plus tard !</div>';
 }
 
 echo '<div class="timbre"><img src="medias/img/timbre/timbre-dev.svg" alt=" "></div>
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
                <li data-cat="3" data-lien="0">  Cycle d’ingénieur : Logiciels et Systèmes d’information
</li>
                <li data-cat="3" data-lien="5">Systèmes d'information</li>
                <li data-cat="3" data-lien="2">Informatique</li>
                <li data-cat="3" data-lien="3">Informatique et systèmes d'information
</li>
                <li data-cat="3" data-lien="4">Réseaux et télécommunications</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>



        <?php
$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =1
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=3"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat3 c'.$data['id_intitule'].' lien'.$i.'">
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
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo' <iframe width="350" height="250" src='.$data['url_video'].' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>';
}elseif(empty($data['url_video'])){
    echo'<div class="sans_video">A découvrir plus tard !</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-dev.svg" alt=" "></div>
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
                <li data-cat="4" data-lien="0">Ingénieurie des systèmes complexes</li>
                <li data-cat="4" data-lien="1">Calcule haute performance, simulation</li>
                <li data-cat="4" data-lien="2">Création numérique</li>
                <li data-cat="4" data-lien="5">Informatique</li>
                <li data-cat="4" data-lien="4">Ergonomie</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>



        <?php

$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =1
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=4"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat4 c'.$data['id_intitule'].' lien'.$i.'">
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
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo' <iframe width="350" height="250" src='.$data['url_video'].' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>';
}elseif(empty($data['url_video'])){
    echo'<div class="sans_video">A découvrir plus tard !</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-dev.svg" alt=" "></div>
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
                <li data-cat="5" data-lien="0">Architecture des logiciels</li>
                <li data-cat="5" data-lien="1">Développement "mobile factory"</li>
                <li data-cat="5" data-lien="2">Expert informatique - Parcours Développement Web ou Logiciel</li>
                <li data-cat="5" data-lien="3">Data et Intelligence Artificielle</li>
                <li data-cat="5" data-lien="4">CTO & Tech Lead</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>



        <?php
$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =1
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=5"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat5 c'.$data['id_intitule'].' lien'.$i.'">
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
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo'<iframe width="350" height="250" src='.$data['url_video'].' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>';
}elseif(empty($data['url_video'])){
      echo'<div class="sans_video">A découvrir plus tard !</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-dev.svg" alt=" ">
</div>
</main>';
$i++;
}
$req = null;
echo('</section>'); 
?>
  
</body>

</html>

