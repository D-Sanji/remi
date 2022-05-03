<?php
$mysqli=mysqli_connect('localhost','root','','mission_1');
$result = mysqli_query($mysqli, "SELECT * FROM taches ORDER BY id");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Esapce Taches</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <a href="Deconnexion.php">Déconnexion</a><br/><br/>
        <a href="FormulaireTache.php">Ajouter une tache</a><br/><br/>
    </body>
</html>