<?php

namespace App\Controller;

use RedBeanPHP\R;

class TaskController extends AbstractController
{
    public function index()
    {
        self::render('home/index');
    }

    public function deleteTask(int $id)
    {
        $task = R::findOne('task', 'id=?', [$id]);
        R::trash($task);
        self::location('c=home');
    }
}