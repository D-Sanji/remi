<!DOCTYPE HTML>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <fieldset><legend><b>Connexion</b></legend>
        <form method="post" action="VerifConnexion.php">
            <div>
            <input type="text" name="login" placeholder="Votre pseudo..." required>
            <input type="password" name="password" placeholder="Votre mot de passe..." required>
            </div>
            <div>
            <input type="submit" name="valider" value="Connexion">
            </div>
        </form>
        </fieldset>
    </body>
</html>