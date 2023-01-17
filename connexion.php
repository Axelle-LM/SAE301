<?php $conn =new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', ''); ?>
<h1>Connexion espace enseignant</h1>
<?php

    if(explode("@", $_POST['mail'])[1] == "univ-eiffel.fr"){
        $query = "SELECT `mail`,`password` FROM `sae301_compte_enseignant`;";
        $stmt = $conn ->prepare($query);
        $stmt->execute();
        foreach ($stmt as $user) {
            if ($user['mail'] == $_POST['mail'] && password_verify($_POST['password'], $user['password'])) {
                $loggedUser = $_POST['mail'];
            }
            else {
                var_dump($user['mail']);
                var_dump($_POST['mail']);
                echo "Erreur";
            }
        }
    } else {
        echo "Vous ne pouvez pas poster si vous ne faite pas partie de l'équipe enseignante";
    }
?>

<?php if(!isset($loggedUser)): ?>
<form action="" method="post" class="connexion">
    <div class="connexion">
        <label for="mail">mail</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div class="connexion">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </div>
    <div class="connexion">
        <input type="submit" value="Connexion">
    </div>
</form>

<?php else: ?>
<?php
  header('Location: http://localhost/SAE301/phpLena/FormActu.php');
  exit();
?>

<?php endif; ?>
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
