<?php
session_start();
unset($_SESSION['login']);
header("Refresh: 5; url=./");
echo "Vous avez été correctement déconnecté du site.<br><br><i>Redirection en cours, vers la page d'accueil...</i>";
?>