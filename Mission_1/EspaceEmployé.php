<?php
session_start();
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
        Vous êtes employé

<table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Numéro de tache</td>
        <td>Nom de tache</td>
        <td>Etat</td>
        <td>Niveau de priorité</td>
        <td>Numéro du responsable</td>
        <td>Numéro de l'employe</td>
        <td>Modification</td>
    </tr>
    
    <?php 
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['id']."</td>";
        echo "<td>".$res['NomTache']."</td>";
        echo "<td>".$res['Etat']."</td>";
        echo "<td>".$res['NivPrio']."</td>";    
        echo "<td>".$res['id_Resp']."</td>";        
        echo "<td>".$res['id_Employe']."</td>";
        if ($res['id_Employe']==$_SESSION['id']) {
       echo "<td><a href=\"ModifEtat.php?id=$res[id]\">Modifier Etat</a></td>";
        }
 
    }
    ?>
    </table>
    </body>
</html>