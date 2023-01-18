<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <!-- OXYGEN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/faviconmmi.png" type="image/x-icon">

    <title>MMI-Métiers</title>
</head>

<body>
    <header>
        <a href="index.html"><img class="logo"></a>

        <h1> Des métiers d'avenir</h1>
        <nav>
            <div class="nav">
                <a class="sous_titre" href="detail.html"> MMI en détail </a>
            </div>
            <div class="nav">
                <a class="sous_titre" href="temoignage.html">Témoignages</a>
            </div>
            <div class="nav">
                <a class="sous_titre" href="international.html"> International </a>
            </div>
        </nav>

        <div class="separateur"></div>
        <h2> Pour toutes les passions et les centres d'intérêts </h2>

        <nav class="tri">
            <div class="categorie">
                Toutes les catégories
            </div>

            <div class="categorie">
                Audio-Visuel
            </div>

            <div class="categorie">
                Développement
            </div>

            <div class="categorie">
                Communication
            </div>

        </nav>
        
    </header>

<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_metier');
$result = $stmt -> fetchall();

foreach ($result as $metier){
    echo "
    <div class="container">
            <div class="container_image">
                <a href='page_metier.php?id={$metier["id_metier"]}'><img src='<?php {$metier["img_metier"]};?' id="crea UXD" alt="métier UX designer"></a>
            </div>
            </div>
            }
?>

    </div>
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
               <a href="connexion.php">espace enseignant</a>
            </div>
        </div>
    </footer>
</body>
</html>
