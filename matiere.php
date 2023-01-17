<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h3>Matières</h3>

    <div>

<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_matiere');
$result = $stmt -> fetchall();

foreach ($result as $matiere){
    echo "
    <a href='page_matiere.php?id={$matiere["id_matiere"]}'>
        <div>
            <div>
                <h4>{$matiere["nom_matiere"]}</h4>
            </div>
        </div>
    </a>";
}
?>

</div>

</body>
</html>