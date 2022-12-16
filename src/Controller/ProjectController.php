<?php

namespace App\Controller;

use RedBeanPHP\R;

class ProjectController extends AbstractController
{
    public function index()
    {
        if (UserController::userConnected()) {
            self::render('project/view-project');
        }
    }

    public function viewProject(int $id)
    {
        if (isset($_SESSION['user'])) {
            $project = R::findOne('project', 'id=?', [$id]);
            self::render('project/view-project', [
                'project' => $project,
            ]);
        }
    }
}