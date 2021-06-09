<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="domaine_design.css">
<link rel="icon" type="image/png" href="medias/img/plane.png" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="medias/js/domaine_design.js"></script>
    <title>domaine_design</title>
</head>

<body>
<?php include 'nav.php' ?>

    <header>
        <p>Bienvenue dans le domaine du</p>
        <h1>DESIGN</h1>
        <p>En visitant les différentes attractions, tu découvriras les différents types d'études possibles !</p>
    </header>

    <section class="tdf lp">
        <div class="intitule">
            <h2>Licences pros</h2>
            <ul>
                <li cat="1" lien="0">Infographie,webdesign et multimédia</li> 
                <li cat="1" lien="1">Métiers du jeu vidéo</li>
                <li cat="1" lien="3">Techniques de l'image et du son spécialité Infographie et webdesign</li>
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
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =4
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
 <div class="info-detail">
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p class="deb2">'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p class="etabli">'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo '<iframe width="350" height="250" src="'.$data['url_video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>'; 

}elseif(empty($data['url_video'])){
    echo '<div class="sans_video">A découvrir plus tard!</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-design.svg" alt=" ">
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
                <li cat="2"lien="0">Animateur 2D</li>
                <li cat="2" lien="1">Animateur 3D</li> 
                <li cat="2" lien="2">Animation & réalisation 3D</li>
                <li cat="2" lien="5">Création et design</li>
                <li cat="2" lien="4">Concepteur Jeu vidéo</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div> 

  <?php
    $link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
  (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
  FROM  intitule_formation, rel_domaine_int_form 
  WHERE id_domaine =4
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
  <div class="info-detail">
  <h3>'.$data['nom_formation'].'</h3>
  <p class="truc">Enseignements</p>
  <p>'.$data['enseignements'].'</p>
  <p class="type">Type</p>
  <p>'.$data['alternance_initiale'].'</p>
  <p class="deb">Débouchés</p>
  <p class="deb2">'.$data['debouches']. '</p>
  <p class="eta">Etablissements</p>
  <p class="etabli">'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
  <p class="url">URL</p>
  <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
  <p class="ligne"></p>';

  if(isset($data['url_video']) AND !empty($data['url_video'])){
    echo '<iframe width="350" height="250" src="'.$data['url_video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>'; 
 
 }elseif(empty($data['url_video'])){
     echo '<div class="sans_video">A découvrir plus tard!</div>';
 }
 
 echo '<div class="timbre"><img src="medias/img/timbre/timbre-design.svg" alt=" ">
 </div>
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
                <li cat="3"lien="0">Design</li>
                <li cat="3"lien="1">Optique, image, vision, multimédia parcours 3D multimédia</li>
                <li cat="3"lien="2">Optique, image, vision, multimédia parcours systèmes distribués et technologies de la <br>
                    Data Science</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>



        <?php

$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =4
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
 <div class="info-detail">
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p class="deb2">'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p class="etabli">'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo '<iframe width="350" height="250" src="'.$data['url_video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>'; 

}elseif(empty($data['url_video'])){
    echo '<div class="sans_video">A découvrir plus tard!</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-design.svg" alt=" ">
</div>
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
                <li cat="4"lien="0">Formation IMAC</li>
                <li cat="4"lien="1">Programme Grande École</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>



        <?php
$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =4
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=3"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat4 c'.$data['id_intitule'].' '.$i.'">
 <div class="exit"></div>
 <div class="info-detail">
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p class="deb2">'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p class="etabli">'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo '<iframe width="350" height="250" src="'.$data['url_video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>'; 

}elseif(empty($data['url_video'])){
    echo '<div class="sans_video">A découvrir plus tard!</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-design.svg" alt=" ">
</div>
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
                <li cat="5"lien="0">Game Art</li>
                <li cat="5"lien="1">Jeu Vidéo</li>
                <li cat="5"lien="2">Game design</li>
                <li cat="5"lien="3">Interactivité et UX design</li>
                <li cat="5"lien="4">Marketing Digital & UX</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>


        <?php

$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =4
AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule 
AND id_formation_type=5"; 
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
$i=0;
// On crée une liste non numérotée avec les résultats
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card cat5 c'.$data['id_intitule'].' '.$i.'">
 <div class="exit"></div>
 <div class="info-detail">
 <h3>'.$data['nom_formation'].'</h3>
 <p class="truc">Enseignements</p>
 <p>'.$data['enseignements'].'</p>
 <p class="type">Type</p>
 <p>'.$data['alternance_initiale'].'</p>
 <p class="deb">Débouchés</p>
 <p class="deb2">'.$data['debouches']. '</p>
 <p class="eta">Etablissements</p>
 <p class="etabli">'.$data['nom_etablissement'].' - '.$data['ville'].' ('.$data['code_postal'].')</p> 
 <p class="url">URL</p>
 <p><img src="medias/img/link_1.svg" alt=" " class="link"><a href="'.$data['url_formation'].'" class="link_text">Découvrez la formation !</a></p>
 <p class="ligne"></p>';

 if(isset($data['url_video']) AND !empty($data['url_video'])){
   echo '<iframe width="350" height="250" src="'.$data['url_video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>'; 

}elseif(empty($data['url_video'])){
    echo '<div class="sans_video">A découvrir plus tard!</div>';
}

echo '<div class="timbre"><img src="medias/img/timbre/timbre-design.svg" alt=" ">
</div>
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