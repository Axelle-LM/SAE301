<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleActu.css">
  <title>Document</title>
</head>
<body>
  
<div class="card">
<?php
   $db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', '');
   $stmt = $db -> query ('SELECT * FROM sae301_actualite');
   $result = $stmt -> fetchall();

   foreach ($result as $actualite){
    echo "
        <div class='card_header'>
          <img src='{$actualite["img_actu"]}' alt='card__image' class='card__image' width='600'>
        </div>

        <div class='card_body'>
          <h4 class='titre'>{$actualite["titre_actu"]}</h4>
          <p>{$actualite["texte_actu"]}</p>
          <h5>{$actualite["auteur_actu"]}</h5>
          <small>{$actualite["date_actu"]}</small>
        </div>
";
}
?>
  </div>

</body>
</html>