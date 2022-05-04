<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission2.2');

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM salle WHERE id = $id");
header("Location:ListeSalle.php");
?> 