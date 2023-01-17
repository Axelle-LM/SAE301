
<?php
    $auteur = $_POST['auteur_actu'];
    $date = $_POST['date_actu'];
    $img = $_POST['img_actu'];
    $texte = $_POST['txt_actu'];
    $titre = $_POST['titre_actu'];

    $db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', '');
    $stmt=$db->query("INSERT INTO sae301_actualite VALUES ('NULL','$titre', '$auteur', '$date', '$img', '$texte')");?>
<html>
<h1> Actualité </h1>
<form method="post">

    <label>Titre:</label><br>
    <input type="text" id="titre_actu" name="titre_actu"><br>

    <input type="file" id="img_actu" name="img_actu" accept="image/png, image/jpeg"><br>

    <label>Entrer le texte de l'actualité:</label><br>
    <textarea name="txt_actu" style="width:600px; height:200px;"></textarea><br>

    <label>Auteur:</label><br>
    <input type="text" id="auteur_actu" name="auteur_actu"><br>

    <input type="date" id="date_actu" name="date_actu"><br>

    <input type="submit" value="Submit">
</form>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Oxygen&display=swap');
    *::after {
    box-sizing: border-box;
}
body{
    font-size:1.5rem;
}
form{
    display: flex;
    flex-direction: column;
    align-items:center;
}
input{
    min-width: 20%;
}
h1{
    font-size: 2rem;
    font-family:'oxygen';
    color: #5B566C;
        text-align: center;
}
</style>
</html>
