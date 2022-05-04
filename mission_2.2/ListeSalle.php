<?php

include 'connect.php';
$mysqli=mysqli_connect('localhost','root','','mission2.2');
$result = mysqli_query($mysqli, "SELECT * FROM salle");
?>

<html>
<head>  
    <title>Liste Salle</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<header class="header">
    <h1>Liste des salles</h1>
    <a href="FormulaireCreation.php" class="button">Ajouter une salle</a>
    <a href="planning.php" class="button">Planning</a>
    <a href="Deconnexion.php" class="button">Déconnexion</a><br/><br/>
</header>


    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Id salle</td>
        <td>Nom de la salle</td>
        <td>Modification</td>
    </tr>
    
    <?php 
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['id']."</td>";
        echo "<td>".$res['nom']."</td>";   
        echo "<td><a href=\"ModifSalle.php?id=$res[id]\">Modifier</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Etes-vous sur de vouloir supprimer ?')\">Supprimer</a> | <a href=\"PlanningSalle.php?nom=$res[nom]\">Planing de la salle</a>";
    }
    ?>
    </table>

<footer class="footer">
Créer par Rémi LIBESSART
</footer>

</body>
</html>