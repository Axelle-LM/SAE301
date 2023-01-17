<?php $db=new PDO('mysql:host=localhost;dbname=nigon_test;port:3306;charset=utf8','nigon','h2-MT6r6auTUcPJ'); ?>

<h3>Ajouter une matière</h3>
<form action="" method="post">
<div class="matiere">
        <label for="nom_matiere">Entrez le nom de la matière : </label>
        <input type="text" name="nom_matiere" id="nom_matiere" required>
    </div>
    <div class="matiere">
        <label for="description_texte">Description de la matière : </label>
        <textarea name="description_texte" id="description_texte" required width="200" height="250"></textarea>
    </div>
    <div class="matiere">
        <input type="submit" value="ajouter matiere">
    </div>
</form>

<?php
    $description_matiere = $_POST['description_matiere'];
    $nom_matiere = $_POST['nom_matiere'];

    if(empty($nom_matiere)) {
        echo "Erreur, le nom de la matière est vide!\n";
    } else {
        $stmt = $db -> query ("INSERT INTO sae301_matiere(nom_matiere,description_texte) VALUES ('$description_matiere', '$nom_matiere')");
    }
?>

<h3>Supprimer une matière</h3>
<?php
$stmt2 = $db -> query ("SELECT * FROM sae301_matiere");
$result = $stmt2 -> fetchall();
?>

<form method="POST">
<?php
    foreach ($result as $id){      
?>
        <input type="checkbox" name="id_checkbox[]" value= "<?php echo"{$id['id_matiere']}"; ?>">
        <?php
        echo "
        <div>
            <p>{$id["id_matiere"]} {$id["nom_matiere"]} {$id["description_texte"]}<p>
        </div>";
    }
?>

    <input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    

    if(!empty($_POST['id_checkbox'])) {

        foreach($_POST['id_checkbox'] as $value){
            $delete = $db -> query ("DELETE FROM sae301_matiere WHERE id_matiere = $value");
        }

    }
}
?>