<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-utilities.css">
    <link rel="stylesheet" href="bootstrap-reboot.css">
<!-- OXYGEN -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/faviconmmi.png" type="image/x-icon">

    <title>MMI-En détail</title>
</head>
<body>
    <header>
        <a class="logo" href="index.html"><img class="logo"></a>

        <h1>Programme en MMI </h1>

        <nav>
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
    <main>
        <p> MMi est une formation pluridisciplinaire, dans laquelle les étudiants découvrent de nombreuses matières et expriment leurs compétences 
            avant de se spécialiser au semestre 4 dans l’un des deux parcours proposés par l’IUT.</p>

<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_matiere');
$result = $stmt -> fetchall();

foreach ($result as $matiere){
    echo "
     <section>
            <a href='page_matiere.php?id={$matiere["id_matiere"]}'>
                <div class="matiere">{$matiere["nom_matiere"]}</div>
            </a>
       </section>
       }";?>
<h3> Les réalisations des étudiant.e.s </h3>
        <p>
            Au cours de ces 3 années de BUT, les étudiants apprennent à se surpasser dans des travaux individuels mais aussi dans des travaux de groupe. Voici une sélection de projets et SAÉ (situation d’apprentissage et évaluation) sur lesquels les MMI de 1ère et 2ème année ont pu travailler. Avec la réforme et le passage du DUT (formation sur 2 ans) en BUT (formation sur 3 ans), nous ne sommes pas en mesure d’afficher ceux des troisième années qui apparaîtront en 2023-2024.
            Ici vous pourrez visualiser un top 3 des projets réalisés par année.
        </p>
        <h2>1e année</h2>
        <section class="projet">
            <div class="card">
                <a href="projetResaweb.html">
                    <div>Resaweb</div>
                    <div><img src="images/vignetteResaweb.png" alt="vignette du projet resaweb"></div>
                </a>    
            </div> <!-- PENSEZ A MODIFIER TITRE + ALT -->
            <div class="card">
                <a href="projetInterview.html">
                    <div>Interview</div>
                    <div><img src="images/vignetteInterview.jpg" alt="vignette du projet intreview"></div>
                </a>
            </div><!-- PENSEZ A MODIFIER TITRE + ALT -->
            <div class="card">
                <a href="projetRefonte">
                    <div>Refonte UX</div>
                    <div><img src="images/vignetteRefonte.png" alt="vignette du projet refonte UX"></div>
                </a>
            </div><!-- PENSEZ A MODIFIER TITRE + ALT -->
        </section>
    </main>
        <h2>2e année</h2>
    <main>
        <section class="projet">
            <div class="card">
                <a href="projetPodcast.html">
                <div>Podcast</div>
                <div><img src="images/vignettePodcast.jpg" alt=" vignette du projet podcast"></div>
                </a>
            </div><!-- PENSEZ A MODIFIER TITRE + ALT -->
            <div class="card">
                <a href="projetAffiche.html">
                <div>Campagne publicitaire</div>
                <div><img src="images/vignetteAffiche.jpg" alt="vignette du projet de campagne publicitaire"></div>
                </a>
            </div><!-- PENSEZ A MODIFIER TITRE + ALT -->
            <div class="card">
                <a href="projetCV">
                <div>CV Vidéo</div>
                <div><img src="images/vignetteCV.jpg" alt="vignette du projet CV vidéo"></div>
                </a>
            </div><!-- PENSEZ A MODIFIER TITRE + ALT -->
        </section>
    </main>
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
                <a href="coordonnee.html" target="_blank">Coordonnées secrétariat</a>
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
        /*height: 250px;*/
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
        width: 20%;
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
    .separateur {
        width: 70%;
        height: 2px;
        margin: auto;
        background-color: #5B566C;
    }
    h2 {
        font-family: 'inter';
        margin: 10px 20px;
        text-align: center;
    }

    main {
        position: relative;
        /* top: 20vh; */
        margin: 30px 0;
    }

    p {
        font-size: 1.3rem;
        text-align: center;
        margin: 30px;
    }

    h3 {
        color: #5B566C;
        font-size: 2rem;
        font-family: 'oxygen';
        font-weight: 800;
        padding: 2% 5%;
        text-align: center;
        margin: 30px 0 0 0;
    }
    main{
        margin: 0 0 30px 0;
    }
    section{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .projet {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }
    div{
        height: 100%;
    }
    .card {
        width: 30%;
        height: 100%;
        display: flex;
        flex-direction: column;
        font-size: 2rem;
        gap: 15px;
        border: none;
    }

    img {
        width: 100%;
    }

    footer {
        color: white;
        width: 100%;
        background-color: #5B566C;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .footer {
        padding: 10px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-size: 1.5rem;
    }

    .Infooter {
        padding: 5px;
        color: white;
    }
    a{
        color: white;
        text-decoration: none;
    }
    a:hover{
        color: white;
        font-weight:900;
        text-decoration:none;
    }

    .card>a {
        text-decoration: none;
        color: black;
    }
    .card>a:hover{
        font-weight: 900;
        color: black;
    }
    .matiere {
        min-width: 20vw;
        height: 10vh;
        background-color: #5B566C;
        text-align: center;
        color: white;
        border: solid black 2px;
        font-size: 1.7rem;
        padding: 15px;
        margin:15px;
       }

    @media screen and (max-width:800px) {
        nav{
            display: flex;
            flex-direction: column;
            gap: 1px;
        }
        .nav{
            width: 100%;
        }
        .sous_titre{
            font-size:1.2rem;
        }
        .logo{
            background-image:url(images/Minimmi.png);
            width: 50px;
        }
        h1 {
            font-size: 2rem;
        }
        section{
            display: flex;
            gap: 5%;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }
        .matiere {
            width: 30vw;
            font-size: 120%;
            padding: 25px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .projet {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
            align-content: center;
        }
        .card{
            width: 100%;
            margin: 5%;
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
