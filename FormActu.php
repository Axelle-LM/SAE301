<?php

    $auteur = $_POST['auteur_actu'];
    $date = $_POST['date_actu'];
    $img = $_POST['img_actu'];
    $texte = $_POST['txt_actu'];
    $titre = $_POST['titre_actu'];

    $db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ');
    

?>
<h1> Ajouter une actualité </h1>
<form method="post">

    <label>Titre:</label><br>
    <input type="text" id="titre_actu" name="titre_actu"><br>

    <div>
        <label for="img_actu">Entrez le chemin de votre image : </label>
        <input type="text" name="img_actu" id="img_actu" required>
    </div>

    <label>Entrer le texte de l'actualité:</label><br>
    <textarea name="txt_actu" style="width:600px; height:200px;"></textarea><br>

    <label>Auteur:</label><br>
    <input type="text" id="auteur_actu" name="auteur_actu"><br>

    <input type="date" id="date_actu" name="date_actu"><br>

    <input type="submit" value="Submit">

</form>

<?php

if(empty($titre)) {
    echo "Erreur, le titre est vide!\n";
} else {
    $stmt = $db -> query ("INSERT INTO sae301_actualite VALUES ('NULL','$titre', '$auteur', '$date', '$img', '$texte')");
}

?>

<h3>Supprimer une actualité</h3>
<?php
$stmt2 = $db -> query ("SELECT * FROM sae301_actualite");
$result = $stmt2 -> fetchall();
?>

<form method="POST">
<?php
    foreach ($result as $id){      
?>
        <input type="checkbox" name="id_checkbox[]" value= "<?php echo"{$id['id_actu']}"; ?>">
        <?php
        echo "
        <div>
            <p>{$id["id_actu"]} {$id["titre_actu"]} {$id["auteur_actu"]} {$id["date_actu"]} {$id["texte_actu"]}<p>
        </div>";
    }
?>

    <input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    

    if(!empty($_POST['id_checkbox'])) {

        foreach($_POST['id_checkbox'] as $value){
            $delete = $db -> query ("DELETE FROM sae301_actualite WHERE id_actu = $value");
        }

    }
}
?>
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
