<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domaine_design.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="medias/js/domaine_design.js"></script>
    <title>Page_domaine</title>
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
        <p>Bienvenue dans le domaine de</p>
        <h1>Design</h1>
        <p>En visitant les différentes attractions, tu découvriras les différents types d'études possibles !</p>
    </header>

    <section class="tdf lp">
        <div class="intitule">
            <h2>Licences pros</h2>
            <ul>
                <li>Cinéma et Audiovisuel</li>
                <li>Cinéma</li>
                <li>Gestion de la production audiovisuelle</li>
                <li>Techniques et activités de l'image et du son</li>
                <li>Techniques du son et de l'image parcours Métiers du Motion et du sound design
                </li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>


          <?php

$link = new PDO('mysql:host=localhost;dbname=test', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation 
 FROM  intitule_formation, rel_domaine_int_form 
 WHERE id_domaine =4
 AND rel_domaine_int_form.id_intitule=intitule_formation.id_intitule";
// On prépare la requête avant l'envoi :
$req = $link -> prepare($sql);
$req -> execute();
// On crée une liste non numérotée avec les résultats
echo '<ul>';
while($data = $req -> fetch()){
 // On affiche chaque résultat sous forme d'un item de la liste
 echo '<main class="card c'.$data['id_intitule'].'">'.$data['nom_formation'].' <b>'.$data['enseignements'].
 '</b>' .$data['alternance_initiale'].' <b>'.$data['debouches'].
 '</b>  <b>'.$data['nom_etablissement'].'</b><b>'.$data['ville'].
 '</b>  <b>'.$data['code_postal'].'</b> <b>'.$data['url_formation']  .'</main>';
}
$req = null;
echo '</ul>';

?>


        <main class="card c1">
            <div class="exit"></div>
            <h3>Cinéma et audiovisuel</h3>
            <p class="truc">Enseignements</p>
            <!-- liste avec PHP  -->
            <p class="type">Type</p>
            <!-- liste avec PHP  -->
            <p class="deb">Débouchés</p>
            <!-- liste avec PHP  -->
            <p class="eta">Etablissements</p>
            <!-- liste avec PHP  -->
            <p class="url">URL</p>
            <!-- url avec PHP  -->
            <!-- <div class="ligne"></div> -->
            <video src="">
                <a href="">Vidéo 1jour1ecole</a>
            </video>
            <div class="timbre"></div>
        </main>
    </section>



    <section class="tdf bachelors">
        <div class="intitule">
            <h2>Bachelors</h2>
            <ul>
                <li>Monteur</li>
                <li>Assistant de production audiovisuelle</li>
                <li>Film making</li>
                <li>Chef opérateur son</li>
                <li>Cinéma Animation 3D</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>

        <main class="card c2">
            <div class="exit"></div>
            <h3>Cinéma et audiovisuel</h3>
            <p class="truc">Enseignements</p>
            <!-- liste avec PHP  -->
            <p class="type">Type</p>
            <!-- liste avec PHP  -->
            <p class="deb">Débouchés</p>
            <!-- liste avec PHP  -->
            <p class="eta">Etablissements</p>
            <!-- liste avec PHP  -->
            <p class="url">URL</p>
            <!-- url avec PHP  -->
            <!-- <div class="ligne"></div> -->
            <video src="">
                <a href="">Vidéo 1jour1ecole</a>
            </video>
            <div class="timbre"></div>
        </main>
    </section>

    <section class="tdf masters">
        <div class="intitule">
            <h2>Masters</h2>
            <ul>
                <li>Acoustique</li>
                <li>Audiovisuel, médias interactifs numériques, jeux</li>
                <li>Cinéma et audiovisuel</li>
                <li>Ingénierie de l'image et du son</li>
                <li>Intitulé 5</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>

        <main class="card c3">
            <h3>Cinéma et audiovisuel</h3>
            <p class="truc">Enseignements</p>
            <!-- liste avec PHP  -->
            <p class="type">Type</p>
            <!-- liste avec PHP  -->
            <p class="deb">Débouchés</p>
            <!-- liste avec PHP  -->
            <p class="eta">Etablissements</p>
            <!-- liste avec PHP  -->
            <p class="url">URL</p>
            <!-- url avec PHP  -->
            <!-- <div class="ligne"></div> -->
            <video src="">
                <a href="">Vidéo 1jour1ecole</a>
            </video>
            <div class="timbre"></div>
        </main>
    </section>

    <section class="tdf masteres">
        <div class="intitule">
            <h2>Mastères</h2>
            <ul>
                <li>Intitulé 1</li>
                <li>Intitulé 2</li>
                <li>Intitulé 3</li>
                <li>Intitulé 4</li>
                <li>Intitulé 5</li>
            </ul>
            <a href="#" class="lien">Voir toutes les formations</a>
        </div>

        <main class="card c4">
            <h3>Cinéma et audiovisuel</h3>
            <p class="truc">Enseignements</p>
            <!-- liste avec PHP  -->
            <p class="type">Type</p>
            <!-- liste avec PHP  -->
            <p class="deb">Débouchés</p>
            <!-- liste avec PHP  -->
            <p class="eta">Etablissements</p>
            <!-- liste avec PHP  -->
            <p class="url">URL</p>
            <!-- url avec PHP  -->
            <!-- <div class="ligne"></div> -->
            <video src="">
                <a href="">Vidéo 1jour1ecole</a>
            </video>
            <div class="timbre"></div>
        </main>
    </section>

    <section class="tdf"></section>
</body>

</html>