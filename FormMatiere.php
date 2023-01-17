<?php $db=new PDO('mysql:host=localhost;dbname=nigon_test;port:3306;charset=utf8','nigon','h2-MT6r6auTUcPJ'); ?>

<h1>Ajouter une matière</h1>
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

<h1>Supprimer une matière</h1>
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
  <style>
       @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
*::after {
    box-sizing: border-box;
}
    body {
        background-color: white;
        font-family: 'Inter', 'sans-serif';
        height:100%;
        display:flex;
        flex-direction:column;
        margin: 0;
    }
    header {
        width: 100%;
        
    }
    .logo {
        display: flex;
        flex-direction: flex-start;
        width: 100px;
        height: 80px;
        background-image: url(images/faviconmmi.png);
        background-size: contain;
        background-repeat: no-repeat;
        border: none;
        position: relative;
        z-index: 1000;
    }
    h1 {
        color: #5B566C;
        text-align: center;
        font-size: 3rem;
        font-family: 'Oxygen';
        position: absolute;
        font-weight: 800;
        top: 2vh;
        width: 100%;
        margin: 0 0 5px 0 ;
         footer {
        width: 100%;
        background-color: #5B566C;
        display: flex;
        flex-direction: column;
    }
      h2{
      font-family:'inter';
     }
      .card{
        display: flex;
        flex-direction: row;}
     footer {
        width: 100%;
        background-color: #5B566C;
        display: flex;
        flex-direction: column;
        
    }

    .footer {
        padding: 10px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-size: 1.5rem;
        text-align:center;
    }
    .footer>a:hover{
        color:white;
    }
    .Infooter{
        padding: 5px;
    }
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        color: white;
        font-weight:900;
    }
        @media screen and (max-width:800px) {
        .logo{
            background-image:url(images/Minimmi.png);
            width: 50px;
        }
        header{
            height:350px;
            width:100%;
        }
        h1{
            font-size: 2rem;
        }
          .card{
            display:flex;
            flex-direction: column;
          }
        .footer{
            display: flex;
            flex-direction: column;
            font-size: 1.2rem;
            padding: 5px;
        }
    }
</style>
