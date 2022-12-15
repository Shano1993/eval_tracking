<?php

use App\Controller\UserController;

if (isset($data['userProject'])) {
    $projects = $data['userProject'];
}

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

    <h2>Page d'accueil</h2>

    <?php
    if (UserController::userConnected()) { ?>
        <form action="/?c=home&a=create-project" method="post" class="formUser">
            <div>
                <label for="title">Titre du projet</label>
                <input type="text" name="title" id="title">
            </div>
            <input type="submit" name="save" value="Créer le projet">
        </form> <?php
    } ?>

    <div id="allProjects"> <?php
        if (UserController::userConnected()) {
            foreach ($projects as $project) { ?>
                <div class="project">
                    <div class="titleProject">
                        <h3><?= $project->title ?></h3>
                        <i class="fa fa-trash"></i>
                    </div>
                    <div class="task">
                        <form action="?c=home&a=create-task" method="post">
                            <input type="text" name="title" id="taskName">
                            <input type="submit" name="save" value="+ Ajouter une tâche <?= $project->id ?>">
                        </form>
                    </div>
                </div><?php
            }
        } ?>
    </div>

</body>
</html>
