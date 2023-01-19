# SAE301
Refonte site MMI Champs

url du site : http://saesitemmi.nigon.butmmi.o2switch.site/

Pour se connecter à l'espace enseignant : 
identifiant : admin@univ-eiffel.fr
mot de passe : admin

Initialement 4 étudiants, nous avons fini le projet à 3 étudiantes. Le projet de la SAÉ 301 nous aura permis de travailler ensemble entre profils différents. Ce pourquoi nous avons toutes été en mesure de trouver notre place car nos tâches arrivaient à se compléter pour au final avoir conçu le redesign du site du BUT MMI de Champs-sur-Marne, fonctionnel dans l’ensemble.

Nous avons tenté de mettre le site sur un hébergeur autre que o2switch, qui est ovh, cependant suite à des problèmes de serveurs sans fin nous avons abandonné et sommes allées sur o2switch afin de garantir un rendu correcte.

Procédure pour installer le site web en local :
1. Installer le serveur local XAMPP : https://www.apachefriends.org/fr/index.html.
2. Ouvrir en tant qu'administrateur XAMPP (dans l'explorateur de fichier, c:\xampp\xampp-control)
3. Attendre que XAMPP s'ouvre, faites "Start" pour "Apache" et "MySQL".
4. Dans un navigateur, saisir l'URL "http://localhost/phpmyadmin/".
5. Créer une nouvelle base de données, importer le document "nigon_test.sql". Ainsi vous aurez toutes les tables dans une nouvelle base de données.
6. Dans l'explorateur de fichiers, "c:\xampp", allez dans le dossier "htdocs", insérer le dossier "SAE301.zip" et l'extraire, vous aurez tous les fichiers nécessaires au site web.
7. Modifier l'accès à la base de données pour que le site soit lié à la base de donnée en serveur local (attention à ne pas oublier une page).
Insérer la commande PHP de type : 
<?php $db =new PDO('mysql:host=localhost;dbname=NomBaseDeDonnees;port=3306;charset=utf8', 'root', ''); ?>
8. Retourner dans le localhost sur un navigateur et ouvrir le dossier contenant le site web. Si tout fonctionne, le site web s'affiche.
9. En local, le site web est accessible depuis l'URL : "http://localhost/SAE301/"
