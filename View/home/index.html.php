<?php

use App\Controller\UserController;

if (isset($data['userProject'])) {
    $projects = $data['userProject'];
} ?>

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
                        <a href="/?c=project&a=view-project&id=<?= $project->id ?>" class="title"><?= $project->title ?></a>
                        <a href="/?c=home&a=delete-project&id=<?= $project->id ?>"><i class="fa fa-trash time"></i></a>
                    </div>
                    <div class="task">
                        <form action="/?c=home&a=create-task&id=<?= $project->id ?>" method="post">
                            <input type="text" name="taskName" id="taskName">
                            <input type="submit" name="save" value="Ajouter une tâche" class="inputSubmit">
                        </form> <?php
                            foreach ($project->ownTaskList as $task) { ?>
                                <div class="tasks">
                                    <div class="taskView">
                                        <p><?= $task->taskName ?></p>
                                        <div class="logo">
                                            <i class="fa fa-history"></i>
                                        </div>
                                    </div>
                                </div> <?php
                            } ?>
                    </div>
                    <div class="divView">
                        <div class="divTime">
                            <i class="fa fa-calendar time"></i>
                            <span class="date">Date Time</span>
                        </div>
                        <div class="divTime">
                            <i class="fa fa-clock-o time"></i>
                            <span class="total">Total Time</span>
                        </div>
                    </div>
                </div> <?php
            }
        } ?>
    </div>

</body>
</html>


