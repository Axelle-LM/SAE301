<?php $db=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', ''); ?>

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
        <label for="id_cat">Entrez l'id de la catégorie (1 : audiovisuel / 2 : dévelopemment / 3 : marketing </label>
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
    $query = "INSERT INTO `sae301_metier`(`texte_metier`, `nom_metier`, `info_supplementaire`, `cat_metier`) VALUES ('$description_metier', '$nom_metier', '$infos_metier', '$id_cat')";
    $stmt = $db->prepare($query);
    $stmt->execute();
?>