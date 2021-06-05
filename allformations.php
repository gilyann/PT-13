<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="allformations.css">
</head>

<body>

    <section>
        <h1>Guide touristique</h1>
        <p>Toutes les attractions et destinations sont renseignées dans ce guide.
            <br> Bonne lecture !</p>
    </section>


    <div id="menu-tab">

        <!--ONGLETS-->
        <div class="tabs">

            <!----------------ONGLET-1-AUDIOVISUEL-------------------------->
            <div class="tab"><input id="tab-1" checked=checked name="tab-group-1" type="radio" />
                <label for="tab-1">Audiovisuel</label>
                <div class="content">
                    <h1>Au Programme </h1>
                    <hr>
                    <p><a href="#lp-audio">Licences pros</a></p>
                    <p><a href="#bachelors-audio">Bachelors</a></p>
                    <p><a href="#masters-audio">Masters</a></p>
                    <br>


    
 
                    <div id="lp-audio">
                    <h1>Licences Pro</h1>
     <table>
     <tr>
     <th>Intitulé</th>
     <th>Enseignements</th>
     <th>Type</th>
     <th>Débouchés</th>
     <th>Établissement</th>
     <th>Ville</th>
     <th>Code Postal</th>
     <th>URL</th>
     <th>Vidéo témoignage</th>
 </tr>       
<?php
    $link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
 
echo  '<tr><td>'.$data['nom_formation'].'</td>
                                <td>
                                    <ul>
                                        <li>'.$data['enseignements'].'</li>
                                    </ul>
                                </td>
                                <td>'.$data['alternance_initiale'].'</td>
                                <td>
                                <ul>
                                    <li>'.$data['debouches']. '</li>
                                </ul>
                            </td>
                            <td>'.$data['nom_etablissement'].'</td>
                            <td>'.$data['ville'].'</td>
                            <td>'.$data['code_postal'].'</td>
                            <td><a href="'.$data['url_formation'].'">Lien formation</a></td>
                                
                            </tr>';
    $i++;
    }
    $req = null;
?>
</table>
</div>
                    <!-- Bachelor AUDIOVISUEL-->
<br>
                    <div id="bachelor-audio">
                    <h1>Bachelor</h1>
     <table>
     <tr>
     <th>Intitulé</th>
     <th>Enseignements</th>
     <th>Type</th>
     <th>Débouchés</th>
     <th>Établissement</th>
     <th>Ville</th>
     <th>Code Postal</th>
     <th>URL</th>
     <th>Vidéo témoignage</th>
 </tr>       
<?php
    $link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
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
 
echo  '<tr><td>'.$data['nom_formation'].'</td>
                                <td>
                                    <ul>
                                        <li>'.$data['enseignements'].'</li>
                                    </ul>
                                </td>
                                <td>'.$data['alternance_initiale'].'</td>
                                <td>
                                <ul>
                                    <li>'.$data['debouches']. '</li>
                                </ul>
                            </td>
                            <td>'.$data['nom_etablissement'].'</td>
                            <td>'.$data['ville'].'</td>
                            <td>'.$data['code_postal'].'</td>
                            <td><a href="'.$data['url_formation'].'">Lien formation</a></td>
                                
                            </tr>';
    $i++;
    }
    $req = null;
?>
</table>
</div>

                    <!-- BACHELORS AUDIOVISUEL-->
<div id="masters-audio">
                    <h1>Masters</h1>
     <table>
     <tr>
     <th>Intitulé</th>
     <th>Enseignements</th>
     <th>Type</th>
     <th>Débouchés</th>
     <th>Établissement</th>
     <th>Ville</th>
     <th>Code Postal</th>
     <th>URL</th>
     <th>Vidéo témoignage</th>
 </tr>
                    <?php

    $link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
    $sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
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
echo  '<tr><td>'.$data['nom_formation'].'</td>
                                <td>
                                    <ul>
                                        <li>'.$data['enseignements'].'</li>
                                    </ul>
                                </td>
                                <td>'.$data['alternance_initiale'].'</td>
                                <td>
                                <ul>
                                    <li>'.$data['debouches']. '</li>
                                </ul>
                            </td>
                            <td>'.$data['nom_etablissement'].'</td>
                            <td>'.$data['ville'].'</td>
                            <td>'.$data['code_postal'].'</td>
                            <td><a href="'.$data['url_formation'].'">Lien formation</a></td>
                                
                            </tr>';
    $i++;
    }
    $req = null;
?>


                   
                     
        </table>
    </div>
</div>




            <!---------------- ONGLET-2-COMMUNICATTION ------------------------->
            <div class="tab"><input id="tab-2" name="tab-group-1" type="radio" />
                <label for="tab-2">Communication</label>
                <div class="content">
                    <h1> Au Programme </h1>
                    <hr>
                    <p><a href="#lp-com">Licences pros</a></p>
                    <p><a href="#bachelor-com">Bachelors</a></p>
                    <p><a href="#inge-com">Cycles d'ingénieur</a></p>
                    <p><a href="#master-com">Masters</a></p>
                    <p><a href="#mastere-com">Mastères</a></p>
                    <br>

                    <!-- LICENCES PROS COM-->
<div id="lp-com">
                        
                        <h1>Licences Pros</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo 1jo</th>
                            </tr>
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
    echo  '<tr><td>'.$data['nom_formation'].'</td>
    <td>'.$data['nom_formation'].'</td>
    <td>
        <ul>
            <li>'.$data['enseignements'].'</li>
        </ul>
    </td>
    <td>'.$data['alternance_initiale'].'</td>
    <td>
    <ul>
        <li>'.$data['debouches']. '</li>
    </ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>
    
</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                          
                                
                    <!-- BACHELORS COM-->
                    <div id="bachelor-com">
                        <h1>Bachelors</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
<?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
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
    echo  '<tr><td>'.$data['nom_formation'].'</td>
    <td>'.$data['nom_formation'].'</td>
    <td>
        <ul>
            <li>'.$data['enseignements'].'</li>
        </ul>
    </td>
    <td>'.$data['alternance_initiale'].'</td>
    <td>
    <ul>
        <li>'.$data['debouches']. '</li>
    </ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>
    
</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                          
                        


                    <!-- CYCLES D'INGÉNIEUR COM-->
                    <div id="inge-com">
                        <h1>Cycles d'ingénieur</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
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
    echo  '<tr><td>'.$data['nom_formation'].'</td>
    <td>'.$data['nom_formation'].'</td>
    <td>
        <ul>
            <li>'.$data['enseignements'].'</li>
        </ul>
    </td>
    <td>'.$data['alternance_initiale'].'</td>
    <td>
    <ul>
        <li>'.$data['debouches']. '</li>
    </ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>
    
</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                     


                    <!-- MASTERS COM-->
                    <div id="master-com">
                        <h1>Masters</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
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
    echo  '<tr><td>'.$data['nom_formation'].'</td>
    <td>'.$data['nom_formation'].'</td>
    <td>
        <ul>
            <li>'.$data['enseignements'].'</li>
        </ul>
    </td>
    <td>'.$data['alternance_initiale'].'</td>
    <td>
    <ul>
        <li>'.$data['debouches']. '</li>
    </ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>
    
</tr>';
$i++;
}
$req = null;
?>
</table>
</div>            

                    <!-- MASTÈRES COM-->
                    <div id="mastere-com">
                        <h1>Mastères</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>

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
   echo' <tr><td>'.$data['nom_formation'].'</td>
   <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                         

                </div>

            </div>

            <!---------------- ONGLET-3-DESIGN ------------------------->
            <div class="tab"><input id="tab-3" name="tab-group-1" type="radio" />
                <label for="tab-3">Design</label>
                <div class="content">
                    <h1>Au Programme </h1>
                    <hr>
                    <p><a href="#lp-design">Licences pros</a></p>
                    <p><a href="#bachelor-design">Bachelors</a></p>
                    <p><a href="#inge-design">Cycles d'ingénieur</a></p>
                    <p><a href="#master-design">Masters</a></p>
                    <p><a href="#mastere-design">Mastères</a></p>
                    <br>

                    <!-- LICENCES PROS DESIGN-->
                    <div id="lp-design">
                        <h1>Licences Pros</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo 1jo</th>
                            </tr>
<?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
    echo' <tr><td>'.$data['nom_formation'].'</td>
    <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>           

                    <!-- BACHELORS DESIGN-->
                    <div id="bachelor-design">
                        <h1>Bachelors</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
<?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
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
    echo' <tr><td>'.$data['nom_formation'].'</td>
    <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>   
                           

                    <!-- CYCLES D'INGÉNIEUR DESIGN-->
                    <div id="inge-design">
                        <h1>Cycles d'ingénieur</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
                            <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
    echo' <tr><td>'.$data['nom_formation'].'</td>
    <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div> 
                           

                    <!-- MASTERS DESIGN-->
                    <div id="master-design">
                        <h1>Masters</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
                            <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
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
    echo' <tr><td>'.$data['nom_formation'].'</td>
    <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>   
 

                    <!-- MASTÈRES DESIGN-->
                    <div id="mastere-design">
                        <h1>Mastères</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
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
   echo' <tr><td>'.$data['nom_formation'].'</td>
   <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                         

                </div>

            </div>
                           

            <!---------------- ONGLET-4-DÉVELOPPEMENT ------------------------->
            <div class="tab"><input id="tab-4" name="tab-group-1" type="radio" />
                <label for="tab-4">Développement</label>
                <div class="content">
                    <h1>Au Programme </h1>
                    <hr>
                    <p><a href="#lp-dev">Licences pros</a></p>
                    <p><a href="#bachelor-dev">Bachelors</a></p>
                    <p><a href="#inge-dev">Cycles d'ingénieur</a></p>
                    <p><a href="#master-dev">Masters</a></p>
                    <p><a href="#mastere-dev">Mastères</a></p>
                    <br>

                    <!-- LICENCES PROS DESIGN-->
                    <div id="lp-dev">
                        <h1>Licences Pros</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo 1jo</th>
                            </tr>
                            <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
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
   echo' <tr><td>'.$data['nom_formation'].'</td>
   <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                         
                            
                        <!-- BACHELORS DEV -->
                        <div id="bachelor-dev">
                        <h1>Bachelors</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo 1jo</th>
                            </tr>
                            <?php

$link = new PDO('mysql:host=localhost;dbname=mmi-airline', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
$sql = "SELECT nom_formation, enseignements, alternance_initiale, debouches, nom_etablissement, ville, code_postal, url_formation, intitule_formation.id_intitule
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
   echo' <tr><td>'.$data['nom_formation'].'</td>
   <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                   



                    <!-- CYCLES D'INGÉNIEUR DEV-->
                    <div id="inge-dev">
                        <h1>Cycles d'ingénieur</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
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
   echo' <tr><td>'.$data['nom_formation'].'</td>
   <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>             
                        

                    <!-- MASTERS DEV-->
                    <div id="master-dev">
                        <h1>Masters</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
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
   echo' <tr><td>'.$data['nom_formation'].'</td>
   <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>             
 

                    <!-- MASTÈRES DEV-->
                    <div id="mastere-dev">
                        <h1>Mastères</h1>
                        <table>
                            <tr>
                                <th>Intitulé</th>
                                <th>Enseignements</th>
                                <th>Type</th>
                                <th>Débouchés</th>
                                <th>Établissement</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>URL</th>
                                <th>Vidéo témoignage</th>
                            </tr>
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
   echo'<tr><td>'.$data['nom_formation'].'</td>
    <td>
    <ul>
        <li>'.$data['enseignements'].'</li>
    </ul>
</td>
<td>'.$data['alternance_initiale'].'</td>
<td>
<ul>
    <li>'.$data['debouches']. '</li>
</ul>
</td>
<td>'.$data['nom_etablissement'].'</td>
<td>'.$data['ville'].'</td>
<td>'.$data['code_postal'].'</td>
<td><a href="'.$data['url_formation'].'">Lien formation</a></td>

</tr>';
$i++;
}
$req = null;
?>
</table>
</div>                         

                </div>

            </div>                           
                           


    </div>
</body>

</html>