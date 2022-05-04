<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission_1');

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM taches WHERE id = $id");
header("Location:EspaceAdmin.php");
?> 