<?php

if (isset($data['project'])) {
    $project = $data['project'];
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

    <div id="project">
        <h1><?= $project->title ?></h1>

        <div id="taskView"> <?php
            foreach ($project->ownTaskList as $task) { ?>
                    <div id="task">
                        <div class="view task">
                            <p><?= $task->taskName ?></p>
                        </div>
                        <div class="view">
                            <div class="viewSpan">
                                <i class="fa fa-calendar"></i>
                                <span>19/12/2022</span>
                            </div>
                        </div>
                        <div class="view">
                            <div class="viewSpan">
                                <i class="fa fa-clock-o"></i>
                                <span>0 H</span>
                            </div>
                        </div>
                        <div class="view">
                            <i class="fa fa-edit editTask"></i>
                            <a href="/?c=task&a=delete-task&id=<?= $task->id ?>"><i class="fa fa-trash red"></i></a>
                        </div>
                    </div>
                 <?php
            } ?>
        </div>
        <div id="detail">
            <div id="totalWatch">
                <i class="fa fa-cc-visa"></i>
                <p>Total heures passées: <span>0</span></p>
            </div>
            <div id="addTask">
                <form action="/?c=home&a=create-task&id=<?= $project->id ?>" method="post">
                    <input type="text" name="taskName" id="taskName">
                    <input type="submit" name="save" value="Ajouter une tâche" class="inputSubmit">
                </form>
            </div>
        </div>
    </div>

</body>
</html>
