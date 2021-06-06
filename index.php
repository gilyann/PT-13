<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="medias/img/plane.png" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src='index.js'></script>
    <script type="text/javascript" src="index.js"></script>
    <title>Page accueil</title>
</head>

<body>

    <?php include 'nav.php' ?>

    <header class="bigheader">
        <h2>MMI Airlines</h2>
        <p>Envole toi vers ton avenir</p>
    </header>
    <div class="low-header">
        <div class="presentation">
            <h1>Avenir Incertain ?</h1>
            <p>Avenir incertain ? Après l’obtention d’un DUT/BUT MMI, l’étudiant peut poursuivre ses études mais quel
                cursus choisir ? <br> <br>MMi Airlines est là pour te guider et trouver la formation idéale ! Pour
                cela, nous te donnons la possibilité de voyager à travers 4 domaines d’études. <br> <br> Ne tarde pas !
                L’enregistrement se termine bientôt ! Récupère ta carte d’embarquement plus bas et prépare toi à
                décoller !
            </p>
        </div>
        <div class="ptt-image">
            <img src="medias/img/fille.png" alt="">
        </div>
    </div>

    <!-- 4 cartes d'embarquements -->
    <main>
        <section>
            <div class="container">
                <a href="hublot.php">
                    <div class="boardingPass">
                        <div class="littleheader lh1">
                            <h1>Poursuite <br> d'études</h1>
                        </div>
                        <div class="airports">
                            <div class="departing">
                                <h1>MMI</h1>
                                <p class="small-t">BUT MMI</p>
                            </div>
                            <img class="plane" src="medias/img/plane.svg" alt="">
                            <div class="arriving">
                                <h1>ETU</h1>
                                <p>poursuite <br> d'études</p>
                            </div>
                        </div>
                        <div class="description">
                            <h4>DESCRIPTION :</h4>
                            <p>Pars à l’aventure et plonge dans les différents univers possibles après le BUT MMI :
                                audiovisuel, communication, design, développement. 
                            </p>
                        </div>
                        <div class="details">
                            <div class="date detail">
                                <h4>DATE</h4>
                                <h3></h3>
                            </div>
                            <div class="gate detail">
                                <h4>GATE</h4>
                                <h3>B11</h3>
                            </div>
                        </div>
                        <div class="details">
                            <div class="number detail">
                                <h4>FLIGHT NUMBER</h4>
                                <h3>181202</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Deuxième carte -->

        <section>
            <div class="container">
                <a href="BUT.php">
                    <div class="boardingPass">
                        <div class="littleheader lh2">
                            <h1>BUT<br>MMI</h1>
                        </div>
                        <div class="airports">
                            <div class="departing">
                                <h1>L&R</h1>
                                <p>lycée & <br>réorientation</p>
                            </div>
                            <img class="plane" src="medias/img/plane.svg" alt="">
                            <div class="arriving">
                                <h1>MMI</h1>
                                <p class="small-t">BUT MMI</p>
                            </div>
                        </div>
                        <div class="description">
                            <h4>DESCRIPTION :</h4>
                            <p>Retrouve toutes les informations nécessaires sur le BUT MMI avant le décollage !</p>
                        </div>
                        <div class="details">
                            <div class="date detail">
                                <h4>DATE</h4>
                                <h3></h3>
                            </div>
                            <div class="gate detail">
                                <h4>GATE</h4>
                                <h3>B11</h3>
                            </div>
                        </div>
                        <div class="details">
                            <div class="number detail">
                                <h4>FLIGHT NUMBER</h4>
                                <h3>070602</h3>
                            </div>
                        </div>
                    </div>
            </div> </a>
        </section>

        <!-- Troisième carte -->

        <section>
            <div class="container">
                <a href="a_propos.php">
                    <div class="boardingPass">
                        <div class="littleheader lh3">
                            <h1>L'équipage </h1>
                        </div>
                        <div class="airports">
                            <div class="departing">
                                <h1>ACC</h1>
                                <p class="small-t">accueil</p>
                            </div>
                            <img class="plane" src="medias/img/plane.svg" alt="">
                            <div class="arriving">
                                <h1>MDE</h1>
                                <p>Membres <br>de l'équipe</p>
                            </div>
                        </div>
                        <div class="description">
                            <h4>DESCRIPTION :</h4>
                            <p>Retrouve dans cette section toutes les informations relatives à notre personnel de cabine
                                qui vous accompagnera tout le long du voyage. </p>
                        </div>
                        <div class="details">
                            <div class="date detail">
                                <h4>DATE</h4>
                                <h3></h3>
                            </div>
                            <div class="gate detail">
                                <h4>GATE</h4>
                                <h3>B11</h3>
                            </div>
                        </div>
                        <div class="details">
                            <div class="number detail">
                                <h4>FLIGHT NUMBER</h4>
                                <h3>270302</h3>
                            </div>
                        </div>
                    </div>
            </div> </a>

        </section>

        <!-- Quatrième carte -->

        <section>
            <div class="container">
                <a href="allformations.php">
                    <div class="boardingPass">
                        <div class="littleheader lh4">
                            <h1>Guide <br> touristique</h1>
                        </div>
                        <div class="airports">
                            <div class="departing">
                                <h1>MMI</h1>
                                <p class="small-t">BUT MMI</p>
                            </div>
                            <img class="plane" src="medias/img/plane.svg" alt="">
                            <div class="arriving">
                                <h1>TLF</h1>
                                <p>toutes les <br> formations</p>
                            </div>
                        </div>
                        <div class="description">
                            <h4>DESCRIPTION :</h4>
                            <p>Accède à la liste complète des formations répertoriées. </p>
                        </div>
                        <div class="details">
                            <div class="date detail">
                                <h4>DATE</h4>
                                <h3></h3>
                            </div>
                            <div class="gate detail">
                                <h4>GATE</h4>
                                <h3>B11</h3>
                            </div>
                        </div>
                        <div class="details">
                            <div class="number detail">
                                <h4>FLIGHT NUMBER</h4>
                                <h3>300602</h3>
                            </div>
                        </div>
                    </div>
            </div> </a>

        </section>
    </main>
    <!-- formulaire -->
    <div class="formulaire">
        <div class="container">
            <div class="littleheader formheader">
                <h1>Une question? <br> Contacte-nous !</h1>
            </div>
            <div class="contentform">
                <div class="formairport">
                    <div class="formdeparting lil-img">
                        <h1>TOI</h1>
                        <p>toi</p>
                    </div>
                    <img class="plane" src="medias/img/plane.svg" alt="">
                    <div class="formarriving lil-img">
                        <h1>MMI</h1>
                        <p>MMi Airlines</p>
                    </div>
                </div>
                <form method="Post">
                    <div class="groupform">
                        <input type="text" name="name" id="name" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="name">NOM</label>
                    </div>
                    <div class="groupform">
                        <input type="text" name="email" id="email" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="email">EMAIL</label>
                    </div>
                    <div class="groupform message">
                        <label for="msg">MESSAGE</label>
                        <textarea id="msg" name="msg" rows="8" cols="50" class="text"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="envoyer" id="buttonenvoi" value="envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>


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
      
                          if($retour){
                              echo '<script>alert("Message Envoyé !")</script>';
                          }
                          else{
                              echo '<script>alert("Une erreur est survenue :(")</script>';
                          }
                      }


}
?>

    
</body>

</html>