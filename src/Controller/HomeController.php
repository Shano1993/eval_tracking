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
            $user = R::findOne('user', 'id=?', [$_SESSION['user']->getId()]);
            $project = R::dispense('project');
            $project->title = self::sanitizeString(self::getField('title'));
            $user->ownProjectList[] = $project;

            R::store($user);
            self::render('home/index', [
                'userProject' => $user->ownProjectList
            ]);
        }
    }

    public function createTask()
    {

    }
}
