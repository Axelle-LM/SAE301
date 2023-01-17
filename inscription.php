<?php $conn=new PDO('mysql:host=localhost;dbname=imdb;port=3306;charset=utf8', 'root', ''); ?>
<h1>Inscription enseignants</h1>
<form action="" method="post" class="inscription">

<div class="inscription">
        <label for="nom">Entrez nom: </label>
        <input type="text" name="nom" id="nom" required>
    </div>
    <div class="inscription">
        <label for="prenom">Entrez prenom: </label>
        <input type="text" name="prenom" id="prenom" required>
    </div>
    <div class="inscription">
        <label for="mail">Entrez mail: </label>
        <input type="email" name="mail" id="mail" required>
    </div>
    <div class="inscription">
        <label for="password">Enter your password: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <div class="inscription">
        <input type="submit" value="Inscription">
    </div>
</form>
<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if(explode("@", $mail)[1] == "univ-eiffel.fr"){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "SELECT COUNT(`mail`) FROM `sae301_compte_enseignant` WHERE `mail`='$mail'";
        $stmt = $conn ->prepare($query);
        $stmt->execute();
        $nbOcc = $stmt->fetch();
    
        if($nbOcc[0] != 0 or empty($mail)) {
            echo "Le mail est utilisé ou vide!\n";
        } else {
            $query = "INSERT INTO `sae301_compte_enseignant`(`nom_enseignant`, `prenom_enseignant`, `mail`, `password`) VALUES ('$nom', '$prenom', '$mail', '$hashed_password')";
            $stmt = $conn ->prepare($query);
            $stmt->execute();
        }   
    } else {
        echo "Vous ne pouvez pas poster si vous ne faite pas partie de l'équipe enseignante";
    }
?>
<a href="menu-admin.html" Menu administrateur </a>
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
