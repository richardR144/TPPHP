<?php require_once('../config/config.php');?>
<?php require_once('../controller/connectionController.php');?>


<? require_once('../partial/header.php'); ?>
 
    

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h1>connexion</h1>
    <form method="post">
        <label for="username">user name :</label>
        <input type="text" id="username" name="username" required>
       
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
       
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
    </main>
    <footer>

    </footer>
</body>
</html>




   <!-- je vérifie si l'user a soumit le formulaire -->
<?php if ($_SERVER["REQUEST_METHOD"] === "POST") { ?>

<?php if ($_POST['username'] === 'richard' && $_POST['password'] === 'test') { ?>
    <p>Vous êtes bien connecté</p>
<!-- on demarre la session pour pouvoir stocker les données sur le server -->

<?php logUser(); ?>
<?php redirectionToAdmin(); ?>
    

<?php } else { ?>

    <p>Mauvais identifiants</p>
        
<?php } ?>

<?php } ?>