<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page d'accueil</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

</head>
<body>
  

<style>

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');

    body {
        background-color:grey;
        font-family: 'Inter', 'sans-serif';   
    }

    .titre {
        color:white;
        text-align:center;
        font-size:50px;
    }

    h2 {
        color: white;
        
        display:flex;
        align-items:center;

        font-size:40px;
    }

    .container_titre {
        display:flex;
        justify-content:space-evenly;

    }

    .haut_de_page {
        position:relative;
        height:100px;
        width:1920px;

        margin:-8px;
    }


    .logo {
        position:relative;
        width:170px;

    }

    div {
        display:flex;
        justify-content:space-around;
        justify-content:center;
    }

    .cat1, .cat2, .cat3, .cat4 {
        position:relative;
        width:350px;
        height: 60px;
        background-color:black;

        text-align:center;
    }

    .container_contenu_footer {
        display:flex;
        justify-content:space-around;

    }


    .pied_de_page {
        margin:-8px;
        width:1905px;
        background-color:darkgrey;

        
    }

    h3 {
        font-size:40px;

        display:flex;
        justify-content:space-between;
        color:white;


    }

    .sous-titre1, .sous-titre2, .sous-titre3, .sous-titre4 {
        position:relative;
        width:200px;

    }


    .container_sous-titre1, .container_sous-titre3 {
        display:flex;
        


    }

</style>

<img class="logo" src="./images/logo_mmi.png"/>

<h1 class="titre"> MMI - Champ-Sur-Marne </h1>

<br>
<br>

<header class="haut_de_page">
    <div class="container_titre">
        <div class="cat1">
            <a class="sous_titre" href="#"> MMI en détail </h2>
        </div>

        <div class="cat2">
            <a class="sous_titre" href="./metier.php">Les métiers après MMI </h2>
        </div>

        <div class="cat3">
            <a class="sous_titre" href="#">Témoignages d'anciens </h2>
        </div>

        <div class="cat4">
            <a class="sous_titre" href="#"> Page 4 </h2>
        </div>
    </div>
    
</header>

<svg width="200" height="200" viewbox="0 0 100 100" fill="black">
    <circle cx="10" cy="10" width="200px" height="200px" />
</svg>

<img class="image_accueil" src="" alt="" />

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>    <!-- mettre l'image (balise <img src="" ... /> --->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<footer class="pied_de_page">
    <div class="container_contenu_footer">
        <div class="container_sous_titre_1">
            <h3> A Propos </h3>
        </div>

        <div class="container_sous_titre_2">
            <h3> Réseaux Sociaux </h3>
        </div>

        <div class="container_sous_titre_1">
            <h3> 2 Rue Albert Einstein </h3>
        </div>
        
        <div class="container_sous_titre_2">
            <h3> Coordonnées secrétariat </h3>
        </div>
    </div>
</footer>

</body>
</html>