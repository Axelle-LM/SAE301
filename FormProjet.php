<?php $db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ'); ?>
<h1>Ajouter un projet étudiant</h1>
<form action="" method="post">
    <div>
        <label for="nom_proj">Entrez le nom du projet : </label>
        <input type="text" name="nom_proj" id="nom_proj" required>
    </div>
    <div>
        <label for="description_metier">Description du projet : </label>
        <textarea name="descriptif_proj" id="descriptif_proj" required width="200" height="250"></textarea>
    </div>
    <div>
        <label for="lien_projet">Entrez le lien redirigeant vers le projet en question (lien site internet, lien youtube, etc): </label>
        <textarea name="lien_projet" id="lien_projet" required width="200" height="100"></textarea>
    </div>
    <div>
        <label for="img_proj">Entrez le chemin de votre image : </label>
        <input type="text" name="img_proj" id="img_proj" required>
    </div>
    <div>
        <input type="submit" value="ajouter projet">
    </div>
</form>

<?php
    $descriptif_proj = $_POST['descriptif_proj'];
    $nom_proj = $_POST['nom_proj'];
    $lien_projet = $_POST['lien_projet'];
    $img_proj = $_POST['img_proj'];

if(empty($nom_proj)) {
    echo "Erreur, le nom du projet est vide!\n";
} else {
    $stmt = $db -> query ("INSERT INTO `sae301_projet_etudiant`(`nom_proj`, `descriptif_proj`, `img_proj`, `lien_projet`) VALUES ('$nom_proj', '$descriptif_proj', '$img_proj', '$lien_projet')");
}
?>

<h3>Supprimer un projet</h3>
<?php
$stmt2 = $db -> query ("SELECT * FROM sae301_projet_etudiant");
$result = $stmt2 -> fetchall();
?>

<form method="POST">
<?php
    foreach ($result as $id){      
?>
        <input type="checkbox" name="id_checkbox[]" value= "<?php echo"{$id['id_proj']}"; ?>">
        <?php
        echo "
        <div>
            <p>{$id["id_proj"]} {$id["nom_proj"]} {$id["descriptif_proj"]}<p>
        </div>";
    }
?>

    <input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    

    if(!empty($_POST['id_checkbox'])) {

        foreach($_POST['id_checkbox'] as $value){
            $delete = $db -> query ("DELETE FROM sae301_projet_etudiant WHERE id_proj = $value");
        }

    }
}
?>
<a href="menu-admin.html"> Menu administarteur </a>
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
div{
    display:flex;
    flex-direction: column;
    text-align:center;
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
