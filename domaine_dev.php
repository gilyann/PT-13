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
    <script src="medias/js/domaine_developpement.js"></script>
    <title>domaine_développement</title>
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
        <p>Bienvenue dans le domaine du</p>
        <h1>DEVELOPPEMENT</h1>
        <p>En visitant les différentes attractions, tu découvriras les différents types d'études possibles !</p>
    </header>

    <section class="tdf lp">
        <div class="intitule">
            <h2>Licences pros</h2>
            <ul>
                <li cat="1" lien="0"> Data Mining</li> 
                <li cat="1" lien="1">Développement Web </li>
                <li cat="1" lien="2">DIWA Développeur et Intégrateur de 
Web Application</li>
                <li cat="1" lien="3">Projet web et mobile</li>
                <li cat="1" lien="4">Métiers de l’informatique : conception
                </li> 
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div> 

    


          <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
 <iframe width="350" height="250" src='.$data['url_video'].' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>

<div class="timbre"></div>
</main>';
$i++;
}
$req = null;
echo('</section>'); 
?>


  <iframe width="560" height="315" src="https://www.youtube.com/embed/1oDcd3cg_gk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



 <section class="tdf bachelors">
        <div class="intitule">
            <h2>Bachelors</h2>
            <ul>
                <li cat="2"lien="0">  Développement web option architecte big data</li>
                <li cat="2" lien="1">Développement web</li> 
                <li cat="2" lien="2">Développeur web option Développeur d’application mobiles</li>
                <li cat="2" lien="3">Développeur web</li>
                <li cat="2" lien="4">Développeur web et mobile</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div> 

  <?php
  $link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
       <iframe width="350" height="250" src='.$data['url_video'].' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>;
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
                <li cat="3"lien="0">  Cycle d’ingénieur : Logiciels et Systèmes d’information
</li>
                <li cat="3"lien="1">Informatique réseau</li>
                <li cat="3"lien="2">Informatique</li>
                <li cat="3"lien="3">Informatique et systèmes d'information
</li>
                <li cat="3"lien="4">Réseaux et télécommunications</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>



        <?php
$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
            <h2>Masters</h2>
            <ul>
                <li cat="4"lien="0">Ingénieurie des systèmes complexes</li>
                <li cat="4"lien="1">Calcule haute performnce, simulation</li>
                <li cat="4"lien="2">Création numérique</li>
                <li cat="4"lien="3">Ergonomie</li>
                <li cat="4"lien="4">Ergonomie</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>



        <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
                <li cat="5"lien="1">CTO et Tech Lead</li>
                <li cat="5"lien="2">Développement "mobile factory"</li>
                <li cat="5"lien="3">Expert informatique - Parcours Développement Web ou Logiciel</li>
                <li cat="5"lien="4">Data et Intelligence Artificielle</li>
                <li cat="5"lien="5">Ergonomie</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>



        <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
<!-- if ('.$data['url_video'].'=null){ 
    echo"à découvrir plus tard";
   }else{ 
    echo  
   }-->