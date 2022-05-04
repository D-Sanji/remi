<?php

include 'connect.php';
$mysqli=mysqli_connect('localhost','root','','mission2.2');
$nom=$_GET['nom'];
$result = mysqli_query($mysqli, "SELECT * FROM reservation WHERE id_salle='$nom' ORDER BY jour ASC, heuredebut ASC");
?>

<html>
<head>  
    <title>Planning de la salle</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<header class="header">
    <h1>Planning de la salle <?php echo $nom;?></h1>
    <a href="ListeSalle.php" class="button">Liste des salles</a>
    <a href="Deconnexion.php" class="button">Déconnexion</a><br/><br/>
</header>


    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Nom de la salle</td>
        <td>Heure de début</td>
        <td>Heure de fin</td>
        <td>Jour</td>
        <td>utilisateur</td>
    </tr>
    
    <?php 
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['id_salle']."</td>";
        echo "<td>".$res['heuredebut']."</td>";
        echo "<td>".$res['heurefin']."</td>";
        echo "<td>".$res['jour']."</td>"; 
        echo "<td>".$res['id_reserveur']."</td>";       
    }
    ?>
    </table>

<footer class="footer">
Créer par Rémi LIBESSART
</footer>

</body>
</html>