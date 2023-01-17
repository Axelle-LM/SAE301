<?php $db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ'); ?>

<h1>Ajouter un métier</h1>
<form action="" method="post">
<div class="metier">
        <label for="nom_metier">Entrez le nom du métier : </label>
        <input type="text" name="nom_metier" id="nom_metier" required>
    </div>
    <div class="metier">
        <label for="description_metier">Description du métier : </label>
        <textarea name="description_metier" id="description_metier" required width="200" height="250"></textarea>
    </div>
    <div class="metier">
        <label for="infos_metier">Entrez des infos supplémentaires: </label>
        <textarea type="text" name="infos_metier" id="infos_metier" width="200" height="250"></textarea>
    </div>
    <div class="metier">
        <label for="id_cat">Entrez l'id de la catégorie (1 : audiovisuel / 2 : dévelopemment / 3 : marketing) </label>
        <input type="text" name="id_cat" id="id_cat">
    </div>
    <div class="metier">
        <input type="submit" value="ajouter metier">
    </div>
</form>

<?php
    $description_metier = $_POST['description_metier'];
    $nom_metier = $_POST['nom_metier'];
    $infos_metier = $_POST['infos_metier'];
    $id_cat = $_POST['id_cat'];

    if(empty($nom_metier)) {
        echo "Erreur, le nom du métier est vide!\n";
    } else {
        $stmt = $db -> query ("INSERT INTO `sae301_metier`(`texte_metier`, `nom_metier`, `info_supplementaire`, `cat_metier`) VALUES ('$description_metier', '$nom_metier', '$infos_metier', '$id_cat')");
    }
?>

<h1>Supprimer un métier</h1>
<?php
$stmt2 = $db -> query ("SELECT * FROM sae301_metier");
$result = $stmt2 -> fetchall();
?>

<form method="POST">
<?php
    foreach ($result as $id){
?>
        <input type="checkbox" name="id_checkbox[]" value= "<?php echo"{$id['id_metier']}"; ?>">
        <?php
        echo "
        <div>
            <p>{$id["id_metier"]} {$id["nom_metier"]} {$id["texte_metier"]} {$id["info_supplementaire"]} {$id["cat_metier"]}<p>
        </div>";
    }
?>
    <input type="submit" value="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['id_checkbox'])) {
        foreach($_POST['id_checkbox'] as $value){
            $delete = $db -> query ("DELETE FROM sae301_metier WHERE id_metier = $value");
        }
    }
}
?>
<a href="menu-admin.html"> Menu administrateur</a>
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
