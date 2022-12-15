<?php

use App\Controller\UserController;

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Tracking</title>
    <link rel="stylesheet" href="/build/css/front.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

    <h1>Time Tracking</h1>

    <div id="linkUser">
        <a href="/?c=home">Home</a> <?php
        if (!UserController::userConnected()) { ?>
            <a href="/?c=user&a=login">Connexion</a>
            <a href="/?c=user&a=register">Inscription</a> <?php
        }
        else { ?>
            <a href="/?c=user&a=profile">Profil</a>
            <a href="/?c=user&a=logout">Deconnexion</a> <?php
        } ?>
    </div>

    <main><?= $html ?></main>

    <script src="/build/js/front-bundle.js"></script>
</body>
</html>




