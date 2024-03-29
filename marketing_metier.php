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
<body>
    <header>
        <a class="logo" href="index.html"><img class="logo"></a>

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
     <div class="container">
        <?php
            $db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', '');
            $stmt = $db -> query ('SELECT * FROM sae301_metier, sae301_categorie WHERE sae301_categorie.id_categorie=sae301_metier.cat_metier AND id_categorie=3;');
            $result = $stmt -> fetchall();

        foreach ($result as $metier){
            echo "
            <div class="container_image">
                <a href='page_metier.php?id={$metier["id_metier"]}'><img src='<{$metier["img_metier"]}'></a>
            </div>
            
            }";?>
    </div>
</body>
<style>
    *::after {
        box-sizing: border-box;
    }

    body {
        background-color: white;
        font-family: 'Inter', 'sans-serif';
        width: 100vw;
        height: 100vh;
        margin: auto;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
    }

    header {
        width: 100%;

    }

    .separateur {
        width: 70%;
        height: 2px;
        margin: auto;
        background-color: #5B566C;
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
        position: relative;
        z-index: 1000;
    }

    h1 {
        color: #5B566C;
        text-align: center;
        font-size: 3rem;
        font-family: 'Oxygen';
        font-weight: 800;
        width: 100%;
        margin: 20px 0;
        position: absolute;
        top: 0vh;
    }

    nav {
        display: flex;
        justify-content: space-evenly;
        margin: 70px 0px  50px 0;
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

    .nav:hover {
        background-color: #DDD0C2;
        font-weight: 700;
    }

    .tri {
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        margin: 30px 0px;
    }

    .categorie {
        width: 10%;
        min-height: 10vh;
        background-color: #5B566C;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size:1.2rem;
        padding: 0px 40px
    }

    .sous_titre {
        font-size: 1.5rem;
        text-decoration: none;
        color: black;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    main {
        width: 90%;
        margin: auto;
        /* position: relative; */
        top: 150px;

    }

    .sous_titre {
        font-size: 1.5rem;
        text-decoration: none;
        color: black;
    }


    .titre {
        color: #766A9D;
        text-align: center;
        font-size: 50px;
    }



    h2 {
        text-align: center;
        font-size: 2rem;

    }

    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 50px;
        margin: 50px;
    }

    img {
        width: 90%;
        height: 100%;
    }

    .container_image {
        width: 100%;
        display: flex;
        justify-content:center;
        align-items:center;
        margin:auto;
    }
    img:hover{
        content: 'blabla';
    }
    
    footer {
        /* height: 20vh; */
        width: 100%;
        background-color: #5B566C;
        display: flex;
        flex-direction: column;
        position: relative;
        top: 10vh;
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
    }

    a {
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

        nav {
            display: flex;
            flex-direction: column;
            gap: 1px;
        }

        .nav {
            width: 100%;
            min-height:55px;

        }
        .categorie{
            width:100%;
            min-height:55px;
            padding:0;
        }
        
        .sous_titre{
            font-size:1.2rem;
        }

        .container {
            display: flex;
            flex-direction: column;
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
