<?php
$db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', '');
$stmt = $db -> query ('SELECT * FROM sae301_metier, sae301_categorie WHERE id_metier='.$_GET['id']);
$result = $stmt -> fetchall();

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
            <li class="nav"><a href="metier.php">toute catégorie</a></li>
            <li class="nav"><a href="audiovisuel_metier.php">audiovisuel</a></li>
            <li class="nav"><a href="developpement_metier.php">developpement</a></li>
            <li class="nav"><a href="marketing_metier.php">marketing</a></li>
        </ul>
    </nav>


    <div>
        <h2><?php echo $result[0]["nom_metier"]?></h2>
        <p><?php echo $result[0]["texte_metier"]?></p>
    </div>

    <div>
        <p><?php echo $result[0]["info_supplementaire"]?></p>
    </div>

    </body>
</html>