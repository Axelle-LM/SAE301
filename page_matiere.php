<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port:3306;charset=utf8','nigon','h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_matiere WHERE id_matiere='.$_GET['id']);
$result = $stmt -> fetchall();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <!-- OXYGEN -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/faviconmmi.png" type="image/x-icon">
    <title>MMI-<?php echo $result[0]["nom_matiere"]?></title>
</head>
<body>
    <header>
        <h2><?php echo $result[0]["nom_matiere"]?></h2>
       <nav>
            <div class="nav">
                <a class="sous_titre" href="detail.html"> MMI en détail </a>
            </div>

            <div class="nav">
                <a class="sous_titre" href="metier.html">Les métiers après MMI </a>
            </div>

            <div class="nav">
                <a class="sous_titre" href="temoignage.html">Témoignages</a>
            </div>

            <div class="nav">
                <a class="sous_titre" href="international.html"> International </a>
            </div>
        </nav>
    </header>
    <div class="text">
            <p><?php echo $result[0]["description_texte"]?></p>
    </div>
    </body>
    <footer>
        <div class="footer">
            <a href="https://goo.gl/maps/wxo8Jg7kP3rEcCfs6" target="_blank"> 2 rue Albert Einstein, Champ-Sur-Marne, 77420 </a></div>
        <div class="footer">
            <div class="Infooter">
                <a href="apropos.html"> A Propos </a>
            </div>
            <div class="Infooter">
                <a href="https://linktr.ee/mmichamps" target="_blank">Réseaux Sociaux</a>
            </div>
            <div class="Infooter">
              <a href="coordonnee.html">Coordonnées secrétariat</a>
            </div>
            <div class="Infooter">
               <a href="connexion.html">espace enseignant</a>
            </div>
        </div>
    </footer>
</html>
