<?php
$db=new PDO('mysql:host=localhost;dbname=nigon_test;port=3306;charset=utf8', 'nigon', 'h2-MT6r6auTUcPJ');
$stmt = $db -> query ('SELECT * FROM sae301_projet_etudiant WHERE id_proj='.$_GET['id']);
$result = $stmt -> fetchall();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <!-- OXYGEN -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/faviconmmi.png" type="image/x-icon">
    <title>MMI-<?php echo $result[0]["nom_proj"]; ?></title>
</head>
<body>
    <header>
        <a class="logo" href="index.html"><img class="logo"></a>
        <h1><?php echo $result[0]["nom_proj"]; ?></h1>
       <nav>
            <div class="nav">
                <a class="sous_titre" href="detail.html"> MMI en détail </a>
            </div>

            <div class="nav">
                <a class="sous_titre" href="metier.html">Les métiers après MMI </a>
            </div>

            <div class="nav">
                <a class="sous_titre" href="temoignage.html">Témoignages</a>
            </div>

            <div class="nav">
                <a class="sous_titre" href="international.html"> International </a>
            </div>
        </nav>
    </header>
 <main>
        <div>
            <a href="<?php echo $result[0]["lien_projet"]; ?>"><img src="<?php echo $result[0]["img_proj"]?>" alt=""></a>
        </div>
        <div class="text">
            <p><?php echo $result[0]["descriptif_proj"]; ?></p>
        </div>
  </main>
</body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');

    *::after {
        box-sizing: border-box;
    }

    body {
        background-color: white;
        font-family: 'Inter', 'sans-serif';
        height: 100vh;
        margin: auto;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
    }
    header {
        position: relative;
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
        margin: 0;
        position: relative;
        z-index:1000;
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
        margin: 0 0 5px 0;
    }
    nav {
        display: flex;
        justify-content: space-evenly;
        margin: 30px 0px;
        /* position: relative; */
        /* top: 100px; */
    }
    .nav {
        width: 20%;
        min-height: 10vh;
        background-color: #DDD0C2;
        text-align: center;
        display: flex;
        align-items: center;
    }
    .nav:hover{
     font-weight: 700;
    }
    .sous_titre {
        font-size: 1.5rem;
        text-decoration: none;
        color: black;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    p{
        font-size: 1.3rem;
        font-family: 'inter';
    }
    main{
        display:flex;
        flex-direction: row;
    }
    main>div {
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* justify-content: center; */
        /* line-height: 25px; */
        gap: 0;
    }
    .text{
        display: flex;
        align-items: flex-start;
        margin: 50px 0px;
    }
    .text>a{
        color:black;}
  footer {
        width: 100%;
        background-color: #5B566C;
        display: flex;
        flex-direction: column;
        position: absolute;
        bottom: 1px;
    }

    .footer {
        padding: 10px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-size: 1.5rem;
    }

    .Infooter {
        padding: 5px;
    }

    a {
        text-decoration: none;
        color: white;
        margin: 10px;
    }
    
    @media screen and (max-width:700px) {
      header{
            height:350px;
            width:100%;
            }
      .logo {
            background-image: url(images/Minimmi.png);
            width: 50px;
            }
       h1 {
            font-size: 2rem;
          }
        nav {
          display: flex;
          justify-content: space-evenly;
          margin: 30px 0px;
          }
       .nav{
            width: 100%;
            min-height:55px;
            
          }
        .sous_titre{
            font-size:1.2rem;
        }
        .footer {
            display: flex;
            flex-direction: column;
            font-size: 1.2rem;
            padding: 5px;
            align-items: center;
          }
          .Infooter{
          text-align:center;
          }
      main{
            display: flex;
            flex-direction: column;
            height: 100vh;
          }
       main>div{
            width:100%;
            height:50%;
          }
    }
</style>
</html>
