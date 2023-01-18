<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_metier, sae301_categorie WHERE id_metier='.$_GET['id']);
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
    <title>MMI-<?php echo $result[0]["nom_metier"]?></title>
</head>
<body>
<header>
        <h1><?php echo $result[0]["nom_metier"]?></h1>
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

    <div>
        <p><?php echo $result[0]["texte_metier"]?></p>
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
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
    *::after {
        box-sizing: border-box;
    }
    body {
        background-color: white;
        font-family: 'Inter', 'sans-serif';
        height: 100vh;
        margin: auto;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
    }
    header {
        width: 100%;
    }

    .logo {
        display: flex;
        flex-direction: flex-start;
        width: 100px;
        height: 80px;
        background-image: url(images/faviconmmi.png);
        background-size: contain;
        background-repeat: no-repeat;
        border: none;
        position:relative;
        z-index:1000;
    }

    h1 {
        color: #5B566C;
        text-align: center;
        font-size: 3rem;
        font-family: 'Oxygen';
        position: absolute;
        font-weight: 800;
        top: 2vh;
        width: 100%;
        margin: 0 0 5px 0 ;
    }

    nav {
        display: flex;
        justify-content: space-evenly;
        margin: 30px 0px;
        /* position: relative; */
        /* top: 100px; */
    }

    .nav {
        position: relative;
        width: 10%;
        height: 10vh;
        /* background-color: #DDD0C2; */
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        border: solid #DDD0C2 2px;
        font-size: 1.5rem;
    }

    .nav:hover{
     background-color: #DDD0C2;
     font-weight: 700;
    }

    .sous_titre {
        font-size: 1.5rem;
        text-decoration: none;
        color: black;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
     div:not(.footer, .Infooter){
        display: flex;
        flex-direction: column;
        padding: 0 5%;
    }

   footer {
        width: 100%;
        background-color: #5B566C;
        display: flex;
        flex-direction: column;
        position:absolute;
        bottom: 1px;
    }

    .footer {
        padding: 10px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-size: 1.5rem;
        text-align:center;
    }
    .Infooter{
        padding: 5px;
    }
    a{
        text-decoration: none;
        color: white;
    }
    @media screen and (max-width:800px) {
        .logo {
            background-image: url(images/Minimmi.png);
            width: 50px;
        }
        
        h1 {
            font-size: 2rem;
        }
         nav{
            display: flex;
            flex-direction: column;
            gap: 1px;
        }
        .nav{
            width: 100%;
            min-height:55px;

        }
        .sous_titre{
            font-size:1.2rem;
        }
   
        .footer {
            display: flex;
            flex-direction: column;
            font-size: 1.2rem;
            padding: 5px;
        }
    }
</style>
</html>
