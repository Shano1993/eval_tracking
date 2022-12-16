<?php

namespace App\Controller;

use RedBeanPHP\R;

class HomeController extends  AbstractController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
            self::render('home/index', [
                'userProject' => $user->ownProjectList
            ]);
            exit();
        }
        self::render('home/index');
    }

    public function createProject()
    {
        if (self::isFormSubmitted()) {
            $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
            $project = R::dispense('project');
            $project->title = self::sanitizeString(self::getField('title'));
            $user->ownProjectList[] = $project;

            R::store($user);
            self::render('home/index', [
                'userProject' => $user->ownProjectList
            ]);
        }
    }

    public function createTask(int $id = null)
    {
        if (self::isFormSubmitted()) {
            if ($id === null) {
                self::location('c=home');
                exit();
            }
            $project = R::findOne('project', 'id=?', [$id]);
            if (!$project) {
                self::location('c=home');
                exit();
            }
            $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
            $task = R::dispense('task');
            $task->taskName = self::sanitizeString(self::getField('taskName'));
            $project->ownTaskList[] = $task;
            R::store($project);
        }
        self::render('home/index', [
            'userProject' => $user->ownProjectList
        ]);
    }

    public function deleteProject(int $id = null)
    {
        if ($id === null) {
            self::location('c=home');
            exit();
        }
        $project = R::findOne('project', 'id=?', [$id]);
        if (!$project) {
            self::location('c=home');
            exit();
        }
        $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
        R::trash($project);
        self::render('home/index', [
            'userProject' => $user->ownProjectList
        ]);
    }
}
