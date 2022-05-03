<?php

session_start();

        if(isset($_SESSION['login'])){ /*Vérifie si une session est déjà ouverte*/
            echo "Vous êtes déjà connecté, vous pouvez accéder à l'espace réservation en <a href='#'>cliquant ici</a>.";
        } else {
            if(isset($_POST['valider'])){ /* vérifie si les champs ont été remplis*/
                if(!isset($_POST['login'],$_POST['password'])){
                    echo "Un des champs n'est pas reconnu.";
                } else {
                    $mysqli=mysqli_connect('localhost','root','','mission2.2');
                    if(!$mysqli) {
                        echo "Erreur connexion BDD";
                    } else {
                        $Login=htmlentities($_POST['login'],ENT_QUOTES,"UTF-8"); /*Convertit tous les caractères éligibles en entités HTML*/
                        $Password=htmlentities($_POST['password'], ENT_QUOTES,"UTF-8");
                        $req=mysqli_query($mysqli,"SELECT * FROM utilisateur WHERE Login='$Login' AND Password='$Password'");
                        if(mysqli_num_rows($req)!=1){
                            echo "Login ou mot de passe incorrect.";
                            header("Refresh: 3; url=./");
                            echo "Login ou mot de passe incorrect.";
                            echo "<br><br><i>Redirection en cours, vers la page d'accueil...</i>";
                        } else {
                            $_SESSION['login']=$Login;
                            header("location:planning.php");
                            }
                        }
                    }
                }
            }
        ?>
