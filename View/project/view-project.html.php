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

        <div id="taskView">

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
