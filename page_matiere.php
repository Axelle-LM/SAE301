<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port:3306;charset=utf8','nigon','h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_matiere WHERE id_matiere='.$_GET['id']);
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
    <div>
        <h2><?php echo $result[0]["nom_matiere"]?></h2>
        <p><?php echo $result[0]["description_texte"]?></p>
    </div>
    </body>
</html>