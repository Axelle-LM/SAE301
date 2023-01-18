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
       <div class="container">
        <?php
            $db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', '');
            $stmt = $db -> query ('SELECT * FROM sae301_metier, sae301_categorie WHERE sae301_categorie.id_categorie=sae301_metier.cat_metier AND id_categorie=1;');
            $result = $stmt -> fetchall();

        foreach ($result as $metier){
            echo "
            <div class="container_image">
                <a href='page_metier.php?id={$metier["id_metier"]}'><img src='<{$metier["img_metier"]}'></a>
            </div>
            
            }";?>
    </div>
</body>
</html>
