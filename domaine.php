<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domaine_audiovisuel.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="medias/js/domaine_audiovisuel.js"></script>
    <title>domaine_audiovisuel</title>
</head>

<body>
    
<?php include 'nav.php' ?>

    <header>
        <p>Bienvenue dans le domaine de</p>
        <h1>L'AUDIOVISUEL</h1>
        <p>En visitant les différentes attractions, tu découvriras les <br>différents types d'études possibles !</p>
    </header>

    <section class="tdf lp">
        <div class="intitule">
            <h2>Licences pros</h2>
            <ul>
                <li cat="1" lien="0">Cinéma et Audiovisuel</li> 
                <li cat="1" lien="1">Cinéma</li>
                <li cat="1" lien="2">Gestion de la production audiovisuelle</li>
                <li cat="1" lien="3">Techniques et activités de l'image et du son</li>
                <li cat="1" lien="4">Techniques du son et de l'image parcours Métiers du Motion et du sound design
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
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =3
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

echo '<div class="timbre"><img src="medias/img/timbre/timbre-audio.svg" alt=" ">
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
                <li cat="2"lien="0">Monteur</li>
                <li cat="2" lien="1">Assistant de production audiovisuelle</li> 
                <li cat="2" lien="2">Film making</li>
                <li cat="2" lien="3">Chef opérateur son</li>
                <li cat="2" lien="4">Cinéma Animation 3D</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div> 

  <?php
 $link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
  (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
  FROM  intitule_formation, rel_domaine_int_form 
  WHERE id_domaine =3
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

echo '<div class="timbre"><img src="medias/img/timbre/timbre-audio.svg" alt=" ">
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
                <li cat="3"lien="0">Acoustique</li>
                <li cat="3"lien="1">Audiovisuel, médias interactifs numériques, jeux</li>
                <li cat="3"lien="2">Cinéma et audiovisuel</li>
                <li cat="3"lien="3">Réalisation et création</li>
                <li cat="3"lien="4">Cinéma et audiovisuel</li>
            </ul>
            <a href="allformations.php" class="lien">Voir toutes les formations</a>
        </div>



        <?php

$link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule,url_video
FROM  intitule_formation, rel_domaine_int_form 
WHERE id_domaine =3
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

echo '<div class="timbre"><img src="medias/img/timbre/timbre-audio.svg" alt=" ">
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