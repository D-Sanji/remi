<?php

session_start();

        if(isset($_SESSION['pseudo'])){ /*Vérifie si une session est déjà ouverte*/
            echo "Vous êtes déjà connecté, vous pouvez accéder à l'espace membre en <a href='espace-membre.php'>cliquant ici</a>.";
        } else {
            if(isset($_POST['valider'])){ /* vérifie si les champs ont été remplois*/
                if(!isset($_POST['pseudo'],$_POST['mdp'])){
                    echo "Un des champs n'est pas reconnu.";
                } else {
                    $mysqli=mysqli_connect('localhost','root','','mission_1');
                    if(!$mysqli) {
                        echo "Erreur connexion BDD";
                    } else {
                        $Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8"); /*Convertit tous les caractères éligibles en entités HTML*/
                        $Mdp=htmlentities($_POST['mdp'], ENT_QUOTES,"UTF-8");
                        $id=mysqli_query($mysqli,"SELECT id FROM user WHERE Pseudo = '$Pseudo' AND MotDePasse = '$Mdp'");
                        $raw = mysqli_fetch_array($id);
                        $req=mysqli_query($mysqli,"SELECT * FROM user WHERE Pseudo='$Pseudo' AND MotDePasse='$Mdp'");
                        if(mysqli_num_rows($req)!=1){
                            echo "Pseudo ou mot de passe incorrect.";
                            header("Refresh: 3; url=./");
                            echo "Pseudo ou mot de passe incorrect.";
                            echo "<br><br><i>Redirection en cours, vers la page d'accueil...</i>";
                        } else {
                            $_SESSION['pseudo']=$Pseudo;
                            $_SESSION['id']=$raw["id"];
                            $sql = ("SELECT role FROM user WHERE Pseudo = '$Pseudo' AND MotDePasse = '$Mdp'");
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_array($result);
                                if ($row["role"] == "administrateur") {
                                    header("location:EspaceAdmin.php");
                                } elseif ($row["role"] == "employe") {                             
                                    header("location:EspaceEmployé.php");
                                } else {
                                    header("location:EspaceUtilisateur.php");
                                }                           
                            }
                        }
                    }
                }
            }
        ?>
