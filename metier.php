<!DOCTYPE html>
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
        </ul>
    </nav>

    <h3>Toute catégorie</h3>

    <div>

<?php
$db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', '');
$stmt = $db -> query ('SELECT * FROM sae301_metier');
$result = $stmt -> fetchall();

foreach ($result as $metier){
    echo "
    <a href='page_metier.php?id={$metier["id_metier"]}'>
        <div>
            <div>
                <h4>{$metier["nom_metier"]}</h4>
            </div>
        </div>
    </a>";
}
?>

    </div>

</body>
</html>