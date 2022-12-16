<?php



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Profil utilisateur : <?= $_SESSION['user']->username ?></h2>

    <div id="profileUser">
        <div>
            <p>Identifiant utilisateur</p>
            <p><?= $_SESSION['user']->id ?></p>
        </div>
        <div>
            <p>Adresse Email</p>
            <p><?= $_SESSION['user']->email ?></p>
        </div>
        <div>
            <p>Nom d'utilisateur</p>
            <p><?= $_SESSION['user']->username ?></p>
        </div>
        <div>
            <p>Mot de passe</p>
            <p>********</p>
        </div>

    </div>



</body>
</html>
