<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métiers</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');

    body {
        background-color:lightgrey;
    }

    .titre {
        text-align:center;
    }


    .logo {
        position:relative;
        height:80px;
        width:180px;
    }

    .dark_box {
        background-color:black;

        position:relative;
        width:500px;
        height:50px;

        color:white;

        display:flex;
        justify-content:center;

    }

    h2 {
        display:flex;
        flex-direction:row;
        align-items:center;
        text-align:center;

    }

   
    .cat1, .cat2, .cat3, .cat4 {
        display:flex;
        align-items:center;
    }

    .pied_de_page {
        background-color:grey;
        margin:-8px;

        position:relative;
        width:1920px;
        height:150px;
        top:620px;
    }

    .container_boite {
        position:absolute;
        left:37%;
        right:50%;
    }



</style>


<img class="logo" src="./images/logo_mmi.png"></img>

<h1 class="titre"> Une grande variété de choix </h1>

<div class="container_boite">
    <div class="dark_box">
        <h2> Toutes les catégories </h2>
    </div>
    <br>
    <br> 
    <div class="dark_box">
        <h2> Audiovisuel </h2>
    </div>
    <br>
    <br> 
    <div class="dark_box">
        <h2> Développement </h2>
    </div>
    <br>
    <br> 
    <div class="dark_box">
        <h2> Marketing </h2>
    </div>
</div>

<footer class="pied_de_page">


</footer>


</body>
</html>